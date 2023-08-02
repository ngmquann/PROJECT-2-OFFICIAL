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
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->where('category_id','1')->orderBy('category_id', 'desc')->get();
        $category = DB::table('tb1_category_product')->where('category_status','1')->whereNotIn('category_id', [1])->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status','1')->get();

        $user = DB::table('users')->where('customer_id', $customer_id)->get();

        return view('profile')->with(['datas_cate'=>$categorys])
            ->with(['datas_categ'=>$category])->with(['brand'=>$brand])->with(['user'=>$user]);
    }

    public function updateProfile(Request $request, $customer_id) {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

        $user = DB::table('users')->where('customer_id', $customer_id)->first();
        
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
