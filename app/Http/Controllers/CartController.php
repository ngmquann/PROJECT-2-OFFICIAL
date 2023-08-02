<?php

namespace App\Http\Controllers;

use Cart;
use Darryldecode\Cart\CartCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart($product_id){
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
            'datas_cate'=>$categorys,
            'brand'=>$brand,
            'producthome'=>$data_product,
            'news_gundam'=>$news
        ];

        $product = DB::table('products')
        ->where('product_id', $product_id)
        ->first();

        $cart = session()->get('cart');

        if(isset($cart[$product_id])){
            $cart[$product_id]['quantity'] = $cart[$product_id]['quantity'] + 1;
        }
        else {
            $cart[$product_id] = [
                'name' => $product->product_name,
                'quantity' => 1,
                'price' => $product->product_price,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }
    public function showCart(){
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
            'datas_cate'=>$categorys,
            'brand'=>$brand,
            'producthome'=>$data_product,
            'news_gundam'=>$news
        ];

        $cart = session()->get('cart');
        return view('cart', $data_home)->with('cart', $cart);

    }

    public function updateCart(Request $request){
        if ($request->id && $request->quantity) {
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $view = view('cart2')->with('cart', $carts)->render();
            return response()->json([
                'cart' => $view,
                'code' => 200
            ], 200);
        }
    }

    public function deleteCart(Request $request){
        if ($request->id) {
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $view = view('cart2')->with('cart', $carts)->render();
            return response()->json([
                'cart' => $view,
                'code' => 200
            ], 200);
        }
    }
}
