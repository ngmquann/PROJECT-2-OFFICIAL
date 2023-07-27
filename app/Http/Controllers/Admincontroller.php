<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class Admincontroller extends Controller
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
    public function errots_404()
    {
        return view('errors.404');
    }
    public function login_admins(){
        return view('admin_login');
    }
    public function dashboard(){
        $this->Author();
        return Redirect('admin_product');
    }
    public function check_login(Request $request)
    {   
        
        $admin_email=$request->admin_email;
        $admin_password=$request->admin_password;
        $result = DB::table('useradmin')->where('useradmin_email', $admin_email)->where('useradmin_password', $admin_password)->first();
        if($result)
        {
            Session::put('adminname', $result->useradmin_name);
            Session::put('adminid', $result->useradmin_id);
            return Redirect('admin_product');
        }
        else{
            Session::put('message','error');
            return Redirect('login_admin');
        }
    }
    public function log_out()
    {
        $this->Author();
        Session::put('adminname', null);
        Session::put('adminid', null);
        return Redirect('login_admin');
    }
}
