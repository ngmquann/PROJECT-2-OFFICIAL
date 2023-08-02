<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductDetailController extends Controller
{
    public function get($product_id){
        // $categorys = DB::table('tb1_category_product')->where('category_status','1')->where('category_id','1')->orderBy('category_id', 'desc')->get();
        // $category = DB::table('tb1_category_product')->where('category_status','1')->whereNotIn('category_id', [1])->get();
        $data_product=DB::table('products')
        ->join('tb1_category_product','tb1_category_product.category_id','=','products.category_id')
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('category_status', 1)
        ->where('brand_status', 1)
        ->orderBy('products.product_id', 'desc')->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('product_id', $product_id)
        ->get();
        $news = DB::table('news_gundam')->where('news_status','1')->take(4)->get();
        foreach($filter as $iteam){
            $brand_name = $iteam->brand_name;
        }
        
        $relate = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_name', $brand_name)
        ->whereNotIn('product_id', [$product_id])
        ->get();
        $data_product = [
            'relate'=>$relate,
            'filter'=>$filter,
            'cate_edit'=> $categorys,
            'brand'=> $brand,
            'producthome'=> $data_product,
            'news_gundam'=> $news
            // 'datanews'=> $data_news
        ];
        return view('product_detail',$data_product);
       
    }
}
