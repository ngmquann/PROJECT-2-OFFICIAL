<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class BrandController extends Controller
{
    public function create_brand()
    {
        $data_brand=DB::table('tb1_brand_product')->orderBy('brand_id', 'desc')->get();
        return view('brand.createbrand')->with(['datas'=>$data_brand]);
        
    }
    public function save_brand(Request $request)
    {
        $brand = $request->all();
        DB::table('tb1_brand_product')->insert(['brand_name'=>$brand['name_brand'], 'brand_des'=>$brand['des_brand'],'brand_status'=>$brand['status_brand']]);
        Session::put('notification','Successful Data Entry');
        return Redirect('/admin_brand');

    }
    public function unactive_brand($brand_id)
    {
        DB::table('tb1_brand_product')->where('brand_id',$brand_id)->update(['brand_status'=>1]);
        Session::put('message_status','Success');
        return Redirect('admin_brand');
    }
    public function active_brand($brand_id)
    {
        DB::table('tb1_brand_product')->where('brand_id',$brand_id)->update(['brand_status'=>0]);
        Session::put('message_status','Success');
        return Redirect('admin_brand');
    }
    public function delete_brand($brand_id) 
    {
            $p = DB::table('tb1_brand_product')->where('brand_id', intval($brand_id))->delete();
            Session::put('message_status','Success');
            return redirect()->action([BrandController::class, "create_brand"]);
            
    }
    public function edit_brand($brand_id) 
    {

        $data_brand=DB::table('tb1_brand_product')->orderBy('brand_id', 'desc')->get();
        $edit_brand = DB::table('tb1_brand_product')->where('brand_id', intval($brand_id))->get();
        return view('brand.edit_brand')->with(['edit_brand'=>$edit_brand])->with(['edit'=>$data_brand]);
       
    }
    public function post_update_brand(Request $request)
    {
        $id_brand = $request->input('id_brand');
        $name_brand = $request->input('name_brand');
        $des_brand = $request->input('des_brand');
        $status_brand = $request->input('status_brand');
      
        $p = DB::table('tb1_brand_product')->where('brand_id', intval($id_brand))->update(['brand_name' => $name_brand, 'brand_des' => $des_brand, 'brand_status' => intval($status_brand)]);
        Session::put('notification','Successful Data Entry');
        return redirect()->action([BrandController::class, "create_brand"]);
    }
}
