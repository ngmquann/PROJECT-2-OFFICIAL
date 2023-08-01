<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news_gundam')->orderBy('news_id', 'desc')->get();
        return view('post.index_news')->with(['news_pr' => $news]);
    }
    public function create()
    {
        //categories
        $categories = DB::table('news_tag')->get();
        return view('post.create_news')
            ->with('categories', $categories);
        // return view('post.create_news',$news_cate);
    }
    public function unactive_news($news_id)
    {
        DB::table('news_gundam')->where('news_id', $news_id)->update(['news_status' => 1]);
        Session::put('message_status', 'Success');
        return Redirect('admin_news');
    }
    public function active_news($news_id)
    {
        DB::table('news_gundam')->where('news_id', $news_id)->update(['news_status' => 0]);
        Session::put('message_status', 'Success');
        return Redirect('admin_news');
    }
    public function delete($id)
    {
        $p = DB::table('news_gundam')
            ->where('news_id', intval($id))
            ->delete();
        return redirect()->action([NewsController::class, "index"]);
    }
    public function edit_news($id)
    {
        $categories = DB::table('news_tag')->get();
        $selected_tag = array_column(DB::table('news_gundam_tags')->where('news_id', $id)->select('tag_id')->get()->all(), 'tag_id');

        $news = DB::table('news_gundam')->where('news_id', intval($id))->first();

        $data = [
            'edit_p' => $news,
            'categories' => $categories,
            'selected_tag' => $selected_tag
        ];


        return view('post.update_news', $data);
    }
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng product
        $data_news = $request->all();
        // xử lý upload hình vào thư mục
        $get_image = $request->file('image');
        if ($get_image) {

            $extension = $get_image->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return Redirect('create_news')->with('Error', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $get_image->getClientOriginalName();
            $get_image->move('news_images', $imageName);
            $data_news['news_images'] = $imageName;
        } else {
            $imageName = null;
        }
        $news_gundam = DB::table('news_gundam')
            ->insertGetId([
                'news_titles' => $data_news['news_titles'],
                'news_des' => $data_news['news_des'],
                'news_content' => $data_news['news_content'],
                'news_status' => $data_news['news_status'],
                'news_images' => $imageName,
            ]);

        $tags = $data_news['category_id'];

        foreach ($tags as $tag) {
            DB::table('news_gundam_tags')
                ->insert(([
                    'news_id' => $news_gundam,
                    'tag_id' => $tag
                ]));
        }

        return redirect()->action([NewsController::class, "index"]);
    }
    public function postCreateUpdate(Request $request, $id)
    {
        // nhận tất cả tham số vào mảng product
        $data_news = $request->all();

        $get_image = $request->file('image');
        if ($get_image) {

            $extension = $get_image->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return Redirect('create_news')->with('Error', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $get_image->getClientOriginalName();
            $get_image->move('news_images', $imageName);

        } else {
            //nếu có hình sẽ giữ lại hình củ
            $p = DB::table('news_gundam')
                ->where('news_id', intval($id))
                ->first();
            $imageName = $p->news_images;
            //
        }
        // dd($imageName);
        DB::table('news_gundam')->where('news_id', intval($id))->update([
            'news_titles' => $data_news['news_titles'],
            'news_des' => $data_news['news_des'],
            'news_content' => $data_news['news_content'],
            'news_status' => $data_news['news_status'],
            'news_images' => $imageName,
        ]);

        $deleted = DB::table('news_gundam_tags')->where('news_id', $id)->delete();

        $tags = $data_news['category_id'];

        foreach ($tags as $tag) {
            DB::table('news_gundam_tags')
                ->insert(([
                    'news_id' => $id,
                    'tag_id' => $tag
                ]));
        }

        return redirect()->action([NewsController::class, "index"]);
    }

    public function news_tags()
    {
        $tags = DB::table('news_tag')->orderBy('tag_name', 'desc')->get();
        return view('post.list_tags')
            ->with('tags', $tags);
    }
    public function save_tag(Request $request)
    {
        $tag = $request->all();

        DB::table('news_tag')
            ->insert([
                'tag_name' => $tag['tag_name'],
            ]);
        // Session::put('notification','Successful Data Entry');
        return Redirect('/news/tags');

    }
    public function delete_tag($tag_id)
    {
        $p = DB::table('news_tag')
            ->where('tag_id', intval($tag_id))
            ->delete();
        return redirect('/news/tags');
    }

}
