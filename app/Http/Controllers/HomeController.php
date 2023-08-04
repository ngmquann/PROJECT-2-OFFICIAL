<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    public function home()
    {
        $data_product = DB::table('products')
            ->join('tb1_category_product', 'tb1_category_product.category_id', '=', 'products.category_id')
            ->join('tb1_brand_product', 'tb1_brand_product.brand_id', '=', 'products.brand_id')
            ->where('category_status', 1)
            ->where('brand_status', 1)
            ->orderBy('products.product_id', 'desc')->get();
        $data_news = DB::table('news_gundam')->where('news_status', '1')->get();
        $news = DB::table('news_gundam')->where('news_status', '1')->take(4)->get();
        $data_home = [
            'producthome' => $data_product,
            'news_gundam' => $news,
            'datanews' => $data_news
        ];
        return view('frontend.show_home', $data_home);
    }

    public function news()
    {
        $news = DB::table('news_gundam')
            ->join('news_gundam_tags', 'news_gundam.news_id', '=', 'news_gundam_tags.news_id')
            ->join('news_tag', 'news_gundam_tags.tag_id', '=', 'news_tag.tag_id')
            ->select('news_gundam.*', 'news_tag.*')
            ->get()
            ->groupBy('news_id')
            ->map(function ($items) {
                $tags = $items->pluck('tag_name')->toArray();
                $news = $items->first();
                return ['news' => $news, 'tags' => $tags];
            });

        $tags = DB::table('news_tag')->get();

        return view('news')->with(['news' => $news])->with(['tags' => $tags]);
    }

    public function show_news($id)
    {

        $selected_tag = DB::table('news_gundam_tags')
            ->join('news_tag', 'news_gundam_tags.tag_id', '=', 'news_tag.tag_id')
            ->select('news_tag.*')
            ->where('news_gundam_tags.news_id', $id)
            ->get();

        // dd($selected_tag);
        $news = DB::table('news_gundam')->where('news_id', intval($id))->first();
        $tags = DB::table('news_tag')->get();
        $data = [
            'news' => $news,
            'selected_tag' => $selected_tag,
            'tags' => $tags
        ];


        return view('showNews', $data);
    }

    public function searchNews(Request $request)
    {
        $tagId = $request->input('tag');
        $text = $request->input('titles');

        if ($text == null) {
            $news = DB::table('news_gundam')
                ->join('news_gundam_tags', 'news_gundam.news_id', '=', 'news_gundam_tags.news_id')
                ->join('news_tag', 'news_gundam_tags.tag_id', '=', 'news_tag.tag_id')
                ->select('news_gundam.*', 'news_tag.*')
                ->where('news_tag.tag_id', $tagId)
                ->get()
                ->groupBy('news_id')
                ->map(function ($items) {
                    $tags = $items->pluck('tag_name')->toArray();
                    $news = $items->first();
                    return ['news' => $news, 'tags' => $tags];
                });
        } else {
            $news = DB::table('news_gundam')
                ->where('news_titles', 'LIKE', '%' . $text . '%')
                ->join('news_gundam_tags', 'news_gundam.news_id', '=', 'news_gundam_tags.news_id')
                ->join('news_tag', 'news_gundam_tags.tag_id', '=', 'news_tag.tag_id')
                ->select('news_gundam.*', 'news_tag.*')
                ->get()
                ->groupBy('news_id')
                ->map(function ($items) {
                    $tags = $items->pluck('tag_name')->toArray();
                    $news = $items->first();
                    return ['news' => $news, 'tags' => $tags];
                });
        }

        $tags = DB::table('news_tag')->get();

        return view('news')->with(['news' => $news])->with(['tags' => $tags]);
    }
}
