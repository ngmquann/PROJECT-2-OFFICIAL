<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class CratController extends Controller
{
    public function card(Request $request)
    {
        $meta_desc="Cart for you";
        $meta_keywords="Cart";
        $meta_title="Cart";
        $url_canonical=$request->url();
        //--seo
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
        // $data_card = [
        //     'cate_edit'=> $categorys,
        //     'brand'=> $brand,
        //     'meta_desc'=>$meta_desc,
        //     'meta_keywords'=>$meta_keywords,
        //     'meta_title'=>$meta_title,
        //     'url_canonical'=>$url_canonical
        // ];
        return view('frontend.show_cart')->with('cate_edit',$categorys)->with('brand',$brand)->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function add_cart_ajax(Request $request){
        $data=$request->all();
        $session_id=substr(md5(microtime()),rand(0,26),5);
        $cart=Session::get('cart');
       
        if($cart==true)
        {
            $is_avaiable=0;
            foreach($cart as $val)
            {
                if($val['product_id']==$data['product_id']){
                    $is_avaiable++;
                }
            }
            if($is_avaiable=0)
            {
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id'=> $data['cart_product_id'],
                    'image' => $data['cart_product_image'],
                    'product_price'=>$data['cart_product_price'],
                    'product_qty'=>$data['cart_product_qty']
                );
                Session::put('cart',$cart);
            }
        }
        else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id'=> $data['cart_product_id'],
                'image' => $data['cart_product_image'],
                'product_price'=>$data['cart_product_price'],
                'product_qty'=>$data['cart_product_qty']
            );
        }
        Session::put('cart',$cart);
        Session::save();
    }
    public function savecart(Request $request)
    {
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
        $product_id=$request->product_hidden;
        $quantity=$request->qty;
        $data = DB::table('products')->where('product_id',$product_id)->get();
        $data_card = [
            'cate_edit'=> $categorys,
            'brand'=> $brand,
            // 'producthome'=> $data_product,
            // 'news_gundam'=> $news,
            // 'datanews'=> $data_news
        ];
        return view('frontend.show_cart',$data_card);
    }
}
