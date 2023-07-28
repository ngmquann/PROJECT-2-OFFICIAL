<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductDetailController extends Controller
{
    public function get($product_id){
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->where('category_id','1')->orderBy('category_id', 'desc')->get();
        $category = DB::table('tb1_category_product')->where('category_status','1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();

        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('product_id', $product_id)
        ->get();

        foreach($filter as $iteam){
            $brand_name = $iteam->brand_name;
        }
        
        $relate = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_name', $brand_name)
        ->whereNotIn('product_id', [$product_id])
        ->get();

        return view('product_detail')->with(['filter'=>$filter])->with(['datas_cate'=>$categorys])
                ->with(['datas_categ'=>$category])->with(['brand'=>$brand])->with(['relate'=>$relate]);
    }
}
