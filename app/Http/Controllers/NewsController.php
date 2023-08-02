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
        // $category=DB::table('tb1_category_product')->where('category_status', 1)->orderBy('category_id','desc')->get();
        $news=DB::table('news_gundam')
        ->join('tb1_category_product','tb1_category_product.category_id','=','news_gundam.category_id')
        ->where('category_status', 1)
        ->orderBy('news_gundam.news_id', 'desc')->get();
        // $product=DB::table('products')->get();
        return view('post.index_news')->with(['news_pr'=>$news]);
    }
    public function create() 
    {
        $category=DB::table('tb1_category_product')->where('category_status', 1)->orderBy('category_id','desc')->get();
        $news=DB::table('news_gundam')->orderBy('news_id','desc')->get();
        $news_cate=[
            'cate'=>$category,
            'new'=>$news
        ];
        return view('post.create_news',$news_cate);
    }
    public function unactive_news($news_id)
    {
        DB::table('news_gundam')->where('news_id',$news_id)->update(['news_status'=>1]);
        Session::put('message_status','Success');
        return Redirect('admin_news');
    }
    public function active_news($news_id)
    {
        DB::table('news_gundam')->where('news_id',$news_id)->update(['news_status'=>0]);
        Session::put('message_status','Success');
        return Redirect('admin_news');
    }
    public function delete($id) 
        {
            $p = DB::table('news_gundam')
            ->where('news_id', intval($id))
            ->delete();
            return redirect()->action([NewsController::class,"index"]);
        }
    public function edit_news($id) 
    {
        // $p = DB::table('products')->where('product_id', intval($id))->first();
        $news=DB::table('news_gundam')
        // ->join('tb1_category_product','tb1_category_product.category_id','=','products.category_id')
        // ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('news_id', intval($id))
        ->get();
        $category=DB::table('tb1_category_product')
        ->where('category_status',1)
        ->get();
        $data = [
            'edit_news' => $news,
            'category'=>$category
        ];

        
        return view('post.update_news',$data);
    }
    public function postCreate(Request $request) 
    {
        // nhận tất cả tham số vào mảng product
        $data_news = $request->all();
        // xử lý upload hình vào thư mục
        $get_image=$request->file('image');
        if($get_image)
        {

            $extension = $get_image->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return Redirect('create_news')->with('Error','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $get_image->getClientOriginalName();
            $get_image->move('news_images',$imageName);
            $data_news['news_images']=$imageName;
        }
        else
        {
            $imageName = null;
        }
            DB::table('news_gundam')->insert(['category_id'=>$data_news['category_pr'],
            'news_titles'=>$data_news['name_news'], 
            'news_des'=>$data_news['des_new'],
            'news_content'=>$data_news['content_news'],
            'news_status'=>$data_news['status_news'],
            'news_images'=>$imageName]);
            return redirect()->action([NewsController::class, "index"]);
    }
    public function postCreateUpdate(Request $request, $id) 
    {
        // nhận tất cả tham số vào mảng product
        $title_news = $request->input('name_news');
        $news_des = $request->input('des_new');
        $news_content = $request->input('content_news');
        $news_status = $request->input('news_status');
        $category_pr=$request->input('category_pr');
        $get_image=$request->file('image');
        if($get_image)
        {

            $extension = $get_image->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return Redirect('create_news')->with('Error','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $get_image->getClientOriginalName();
            $get_image->move('news_images',$imageName);
           
        }
        else
        {
            //nếu có hình sẽ giữ lại hình củ
            $p = DB::table('news_gundam')
            ->where('news_id', intval($id))
            ->first();
            $imageName = $p->news_images;
            //
        }
            DB::table('news_gundam')->where('news_id',intval($id))->update(['category_id'=>$category_pr,
            'news_titles'=>$title_news,
            'news_des'=>$news_des,
            'news_content'=>$news_content,
            'news_status'=>$news_status,
            'news_images'=>$imageName]);
            return redirect()->action([NewsController::class, "index"]);
    }
    //--news--//
    public function show_news($news_id)
    {
       
        $categorys = DB::table('tb1_category_product')
        // ->join('products','products.category_id','=','tb1_category_product.category_id')
        // ->join('news_gundam','news_gundam.category_id','=','tb1_category_product.category_id')
        ->where('category_status','1')->get();
        $categorys_id = DB::table('tb1_category_product')
        ->join('products','products.category_id','=','tb1_category_product.category_id')
        // ->join('news_gundam','news_gundam.category_id','=','tb1_category_product.category_id')
        ->where('products.category_id',$category_id)
        // ->where('news_gundam.category_id',$category_id)
        ->where('category_status',1)->take(1)->get();
        $brand=DB::table('tb1_brand_product')
        ->where('brand_status',1)
        ->get();
        $data_product=DB::table('products')
        ->orderBy('product_id', 'desc')->get();
        $news = DB::table('news_gundam')->where('news_status','1')->take(4)->get();
        
       
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->orderBy('product_id', 'desc')
        ->paginate(6)->appends(request()->query());
        
        $edit_news=[
            'filter'=>$filter,
            'cate_edit'=> $categorys,
            'brand'=> $brand,
            'producthome'=> $data_product,
            'news_gundam'=> $news,
            'categorys_gundam'=>$categorys_id
        ];
        return view('frontend.news',$edit_news);
    }
}
