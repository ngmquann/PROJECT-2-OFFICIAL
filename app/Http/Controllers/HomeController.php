<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    
    public function home(){
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->get();
        $brand = DB::table('tb1_brand_product')
        // ->join('tb1_category_product','tb1_category_product.category_id','=','tb1_brand_product.category_id')
        // ->join('products','tb1_brand_product.brand_id','=','products.brand_id')
        // ->join('news_gundam','news_gundam.category_id','=','tb1_brand_product.category_id')
        ->where('brand_status','1')
        ->get();
        $data_product=DB::table('products')
        ->join('tb1_category_product','tb1_category_product.category_id','=','products.category_id')
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('category_status', 1)
        ->where('brand_status', 1)
        ->orderBy('products.product_id', 'desc')->get();
        $data_news = DB::table('news_gundam')->where('news_status','1')->get();
        $news = DB::table('news_gundam')->where('news_status','1')->take(4)->get();
        $data_home = [
            'cate_edit'=> $categorys,
            'brand'=> $brand,
            'producthome'=> $data_product,
            'news_gundam'=> $news,
            'datanews'=> $data_news
        ];
        return view('frontend.show_home',$data_home);
    }
    public function news(){
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->get();
        $category = DB::table('tb1_category_product')->where('category_status','1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
        $news = DB::table('news_gundam')->where('news_status','1')->get();
        $data_news=[
            'cate_edit'=> $categorys,
            'brand'=> $brand,
            
            'news_gundam'=> $news
        ];
        return view('frontend.news',$data_news);
    }
    
}
