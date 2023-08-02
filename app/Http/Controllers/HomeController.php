<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home()
    {
        $categorys = DB::table('tb1_category_product')->where('category_status', '1')->where('category_id', '1')->orderBy('category_id', 'desc')->get();
        $category = DB::table('tb1_category_product')->where('category_status', '1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status', '1')->get();
        return view('home')->with(['datas_cate' => $categorys])->with(['datas_categ' => $category])->with(['brand' => $brand]);
    }

    public function news()
    {
        $categorys = DB::table('tb1_category_product')->where('category_status', '1')->where('category_id', '1')->orderBy('category_id', 'desc')->get();
        $category = DB::table('tb1_category_product')->where('category_status', '1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status', '1')->get();

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

        return view('news')->with(['datas_cate' => $categorys])->with(['datas_categ' => $category])->with(['brand' => $brand])->with(['news' => $news]);
    }

    public function show_news($id)
    {
        //vật bất li thân?
        $categorys = DB::table('tb1_category_product')->where('category_status', '1')->where('category_id', '1')->orderBy('category_id', 'desc')->get();
        $category = DB::table('tb1_category_product')->where('category_status', '1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status', '1')->get();

        //
        $selected_tag = DB::table('news_gundam_tags')
            ->join('news_tag', 'news_gundam_tags.tag_id', '=', 'news_tag.tag_id')
            ->select('news_tag.*')
            ->where('news_gundam_tags.news_id', $id)
            ->get();

        // dd($selected_tag);
        $news = DB::table('news_gundam')->where('news_id', intval($id))->first();

        $data = [
            'news' => $news,
            'selected_tag' => $selected_tag
        ];


        return view('showNews', $data)->with(['datas_cate' => $categorys])->with(['datas_categ' => $category])->with(['brand' => $brand]);
    }
}
