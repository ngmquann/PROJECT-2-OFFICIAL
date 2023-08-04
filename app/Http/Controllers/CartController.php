<?php

namespace App\Http\Controllers;

use Cart;
use Darryldecode\Cart\CartCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function Author()
    {
        $admin_login=Session::get('adminid');
        if($admin_login)
        {
            return Redirect('admin_product');
        }
        else{
            return Redirect('errors_404')->send();
        }
    }

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
            'cate_edit'=>$categorys,
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
                'image' => $product->image,
                'id' => $product->product_id
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
            'cate_edit'=>$categorys,
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

    public function checkout(){
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

        $cart = session()->get('cart');
        return view('checkout', $data_home)->with('cart', $cart);
    }

    public function saveCheckout(Request $request){
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

        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_notes'] = $request->shipping_notes;

        $shipping_id = DB::table('shipping_table')->insertGetId($data);
        $customer_id = Auth::user()->customer_id;

        session()->put('shipping_id', $shipping_id);
        session()->put('customer_id', $customer_id);
        session()->put('total', $request->total);

        return view('payment', $data_home);
    }

    public function orderPlace(Request $request){
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

        $data_order = array();
        $data_order['customer_id'] = session()->get('customer_id');
        $data_order['shipping_id'] = session()->get('shipping_id');
        $data_order['order_total'] = session()->get('total');
        $data_order['order_status'] = 'Processing';
        $order_id = DB::table('order_table')->insertGetId($data_order);

        foreach(session()->get('cart') as $cartItem) {
            $data_order_d = array();
            $data_order_d['order_id'] = $order_id;
            $data_order_d['product_id'] = $cartItem['id'];
            $data_order_d['product_name'] = $cartItem['name'];
            $data_order_d['product_price'] = $cartItem['price'];
            $data_order_d['product_sales_quantity'] = $cartItem['quantity'];
            DB::table('order_details_table')->insert($data_order_d);
        }
    
        // After saving the order and order details, you can clear the related session data.
        session()->forget(['cart', 'total']);
        
        return view('thanks', $data_home);
        }

        public function manage(){
            $this->Author();
            $all_order = DB::table('order_table')
            ->join('users','users.customer_id','=','order_table.customer_id')
            ->select('order_table.*', 'users.customer_name')
            ->orderBy('order_table.order_id', 'desc')
            ->paginate(10)->appends(request()->query());
            $manage_order = view('admin.manage')->with('all_order', $all_order);
            return view('layout.layout')->with('admin.manage', $manage_order);
        }

        public function viewOrder($order_id){
            $this->Author();

            // Fetch the order information
            $order_info = DB::table('order_table')
                ->join('users', 'users.customer_id', '=', 'order_table.customer_id')
                ->join('shipping_table', 'order_table.shipping_id', '=', 'shipping_table.shipping_id')
                ->where('order_table.order_id', $order_id)
                ->select('order_table.*', 'users.*', 'shipping_table.*')
                ->first();

            // Fetch the order details (products) associated with the given order_id
            $order_details = DB::table('order_details_table')
                ->join('products', 'order_details_table.product_id', '=', 'products.product_id')
                ->join('order_table','order_table.order_id','=','order_details_table.order_id')
                ->where('order_details_table.order_id', $order_id)
                ->select('products.*', 'order_details_table.product_sales_quantity', 'order_details_table.product_price', 'order_table.order_total')
                ->get();

            return view('admin.viewOrder')->with('order_info', $order_info)->with('order_details', $order_details);
        }
}
