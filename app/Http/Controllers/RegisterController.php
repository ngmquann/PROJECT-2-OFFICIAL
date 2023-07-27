<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class RegisterController extends Controller
{
    public function get(){
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->where('category_id','1')->orderBy('category_id', 'desc')->get();
        $category = DB::table('tb1_category_product')->where('category_status','1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
        return view('register')->with(['datas_cate'=>$categorys])->with(['datas_categ'=>$category])->with(['brand'=>$brand]);
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
                $newUser->password = $request->password;
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
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->where('category_id','1')->orderBy('category_id', 'desc')->get();
        $category = DB::table('tb1_category_product')->where('category_status','1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
        return view('login')->with(['datas_cate'=>$categorys])->with(['datas_categ'=>$category])->with(['brand'=>$brand]);
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
        
        $user = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($user) {
            return redirect()->route('home');
        } else {
            return back()->with('fail', 'Invalid login credentials.');
        }
    }
}
