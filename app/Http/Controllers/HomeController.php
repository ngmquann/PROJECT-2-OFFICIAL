<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home(){
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->get();
        $category = DB::table('tb1_category_product')->where('category_status','1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
        $data_product=DB::table('products')
        ->join('tb1_category_product','tb1_category_product.category_id','=','products.category_id')
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('category_status', 1)
        ->where('brand_status', 1)
        ->orderBy('products.product_id', 'desc')->get();
        $news = DB::table('news_gundam')->where('news_status','1')->take(4)->get();
        $data_home=[
            'datas_cate'=>$categorys,
            'brand'=>$brand,
            'producthome'=>$data_product,
            'news_gundam'=>$news
        ];
        return view('frontend.home',$data_home);
    }
}
