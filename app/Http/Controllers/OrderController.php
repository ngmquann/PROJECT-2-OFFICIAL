<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;


class OrderController extends Controller
{
    public function manage_order()
    {
        $all_order=DB::table('order_table')
        ->join('customer_table','order_table.customer_id','=','customer_table.customer_id')
        ->select('order_table.*','customer_table.customer_name')
        ->orderby('order_table.order_id','desc')->get();
        $manage_order=view('order.manage_order')->with('all_order',$all_order);
        return view('layout.layout')->with('order.manage_order',$manage_order);
    }
    public function unactive_brand($order_id)
    {
       
        DB::table('order_table')->where('order_id',$order_id)->update(['order_status'=>1]);
        Session::put('message_status','Success');
        return Redirect('manage_order');
    }
    public function active_brand($order_id)
    {
        
        DB::table('order_table')->where('order_id',$order_id)->update(['order_status'=>0]);
        Session::put('message_status','Success');
        return Redirect('manage_order');
    }
    public function delete_brand($order_id) 
    {
            $p = DB::table('order_table')->where('order_id', intval($order_id))->delete();
            Session::put('message_status','Success');
            return redirect()->action([OrderController::class, "manage_order"]);
            
    }
}
