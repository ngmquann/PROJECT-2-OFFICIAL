<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class ProductController1 extends Controller
{
  public function showProductHome()
  {
    $categorys = DB::table('tb1_category_product')->where('category_status','1')->get();
    $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
    $data_product=DB::table('products')
    ->join('tb1_category_product','tb1_category_product.category_id','=','products.category_id')
    ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
    ->where('category_status', 1)
    ->where('brand_status', 1)
    ->orderBy('products.product_id', 'desc')->get();
    $news = DB::table('news_gundam')->where('news_status','1')->take(4)->get();
    $data_home=[
        'cate_edit'=>$categorys,
        'brand'=>$brand,
        'producthome'=>$data_product,
        'news_gundam'=>$news
    ];

    if (isset($_GET['start_price']) && isset($_GET['end_price'])) {
      $start_price = $_GET['start_price'];
      $end_price = $_GET['end_price'];
      $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->whereBetween('product_price', [$start_price, $end_price])
        ->orderBy('product_price', 'ASC')
        ->paginate(6)->appends(request()->query());
    } else {
      $filter = DB::table("products")
      ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
      ->where('brand_status', 1)
      ->paginate(6)->appends(request()->query());
    }

    if (isset($_GET['sort_by'])) {
      if ($_GET['sort_by'] == 'atoz') {
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->orderBy('product_name', 'asc')
        ->paginate(6)->appends(request()->query());
      } elseif ($_GET['sort_by'] == 'ztoa') {
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->orderBy('product_name', 'desc')
        ->paginate(6)->appends(request()->query());
      } elseif ($_GET['sort_by'] == 'lowtohigh') {
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->orderBy('product_price', 'asc')
        ->paginate(6)->appends(request()->query());
      } else {
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->orderBy('product_price', 'desc')
        ->paginate(6)->appends(request()->query());
      }
    }

    if (isset($_GET['brand'])) {
      if ($_GET['brand'] == 'MG') {
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->where('tb1_brand_product.brand_name', 'MG')
        ->paginate(6)->appends(request()->query());
      } elseif ($_GET['brand'] == 'HG') {
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->where('tb1_brand_product.brand_name', 'hg')
        ->paginate(6)->appends(request()->query());
      } elseif ($_GET['brand'] == 'RG') {
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->where('tb1_brand_product.brand_name', 'rg')
        ->paginate(6)->appends(request()->query());
      } elseif ($_GET['brand'] == 'Perfect Grade') {
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->where('tb1_brand_product.brand_name', 'Perfect Grade')
        ->paginate(6)->appends(request()->query());
      } elseif ($_GET['brand'] == 'Kotobukiya') {
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->where('tb1_brand_product.brand_name', 'kotobukiya')
        ->paginate(6)->appends(request()->query());
      }
    }
    return view('model', $data_home)->with(['filter' => $filter]);
  }
}
