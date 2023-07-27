<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home(){
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->where('category_id','1')->orderBy('category_id', 'desc')->get();
        $category = DB::table('tb1_category_product')->where('category_status','1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
        return view('home')->with(['datas_cate'=>$categorys])->with(['datas_categ'=>$category])->with(['brand'=>$brand]);
    }
}
