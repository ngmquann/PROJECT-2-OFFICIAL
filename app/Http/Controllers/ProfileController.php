<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function getProfile($customer_id){
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->get();
        $category = DB::table('tb1_category_product')->where('category_status','1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();
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

        $user = DB::table('users')->where('customer_id', $customer_id)->get();

        return view('profile', $data_home)->with(['user'=>$user]);
    }

    public function updateProfile(Request $request, $customer_id) {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

        $existingUser = DB::table('users')->where('email', $email)->where('customer_id', '!=', $customer_id)->first();
        if ($existingUser) {
            return redirect()->back()->with('mess', 'Email already exists. Please choose a different email.');
        }
        
        DB::table('users')->where('customer_id', $customer_id)->update([
            'customer_name' => $name,
            'email' => $email,
            'customer_phone' => $phone,
        ]);
    
        return redirect()->route('profile', ['customer_id' => $customer_id])->with('mess', 'Updated successfully');
    }
    
    public function changePass(Request $request, $customer_id) {
        $currentPassword = $request->input('password');
        $newPassword = $request->input('new_password');
        $confirmPassword = $request->input('confirm_password');
    
        $user = User::where('customer_id', $customer_id)->first();
        if (!$user) {
            return redirect()->back()->with('mess', 'User not found');
        }
    
        if (!Hash::check($currentPassword, $user->password)) {
            return redirect()->back()->with('mess', 'Incorrect current password');
        }
    
        if ($newPassword !== $confirmPassword) {
            return redirect()->back()->with('mess', 'New password and confirm password do not match');
        }
        
        // Cập nhật thông tin người dùng
        DB::table('users')->where('customer_id', $customer_id)->update([
            'password' => bcrypt($newPassword),
        ]);
    
        return redirect()->route('profile', ['customer_id' => $customer_id])
            ->with('mess', 'Password updated successfully');
    }

}
