<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;

class RegisterController extends Controller
{
    public function get(){
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

        return view('register', $data_home);
    }

    public function register(Request $request){
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'email'=>'required|email',
                'password'=>'required|confirmed|min:9|max:20',
                'customer_name'=>'required|min:6|max:30',
                'customer_phone'=>'required|numeric',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            }

            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user) {
                $newUser = new User();
                $newUser->email = $request->email;
                $newUser->password = bcrypt($request->password);
                $newUser->customer_name = $request->customer_name;
                $newUser->customer_phone = $request->customer_phone;
                $newUser->save();
                return redirect()->route('get')->with('message', 'Registration successful!');
            } else{
                return redirect()->route('showLogin')->with('message', 'The account already exists, please log in.');
            }
        }
    }

    public function showLogin(){
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
        return view('login', $data_home);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        }
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $name = $user->customer_name;
            $id = $user->customer_id;
            $request->session()->put('user_name', $name);
            $request->session()->put('id', $id);
            return redirect()->route('home');
        } else {
            return back()->with('fail', 'Invalid login credentials.')->with('name', '');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->forget('user_name');
        return redirect()->route('home');
    }
}
