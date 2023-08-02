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
    public function create_brand()
    {
        $this->Author();
        $data_category=DB::table('tb1_category_product')->where('category_status', 1)->orderBy('category_id', 'desc')->get();
        $data_brand=DB::table('tb1_brand_product')
        ->join('tb1_category_product','tb1_category_product.category_id','=','tb1_brand_product.category_id')
        ->orderBy('tb1_brand_product.brand_id', 'desc')->get();
        return view('brand.createbrand')->with(['datas'=>$data_brand])->with(['datas_category'=>$data_category]);
    }
    public function save_brand(Request $request)
    {
        $brand = $request->all();
        DB::table('tb1_brand_product')->insert(['category_id'=>$brand['category_id'], 'brand_name'=>$brand['name_brand'], 'brand_des'=>$brand['des_brand'],'brand_status'=>$brand['status_brand']]);
        Session::put('notification','Successful Data Entry');
        return Redirect('/admin_brand');

    }
    public function unactive_brand($brand_id)
    {
        $this->Author();
        DB::table('tb1_brand_product')->where('brand_id',$brand_id)->update(['brand_status'=>1]);
        Session::put('message_status','Success');
        return Redirect('admin_brand');
    }
    public function active_brand($brand_id)
    {
        $this->Author();
        DB::table('tb1_brand_product')->where('brand_id',$brand_id)->update(['brand_status'=>0]);
        Session::put('message_status','Success');
        return Redirect('admin_brand');
    }
    public function delete_brand($brand_id) 
    {
        $this->Author();
            $p = DB::table('tb1_brand_product')->where('brand_id', intval($brand_id))->delete();
            Session::put('message_status','Success');
            return redirect()->action([BrandController::class, "create_brand"]);
            
    }
    public function edit_brand($brand_id) 
    {
        $this->Author();
        $edit_category = DB::table('tb1_category_product')->where('category_status', 1)->orderBy('category_id', 'desc')->get();
        $data_brand=DB::table('tb1_brand_product')
        ->join('tb1_category_product','tb1_category_product.category_id','=','tb1_brand_product.category_id')
        ->orderBy('tb1_brand_product.brand_id', 'desc')->get();
        $edit_brand = DB::table('tb1_brand_product')
        ->join('tb1_category_product','tb1_category_product.category_id','=','tb1_brand_product.category_id')
        ->where('tb1_brand_product.brand_id', intval($brand_id))->get();
        return view('brand.edit_brand')->with(['edit_brand'=>$edit_brand])->with(['edit'=>$data_brand])->with(['edit_category'=>$edit_category]);
       
    }
    public function post_update_brand(Request $request)
    {
        $id_brand = $request->input('id_brand');
        $id_category = $request->input('category_id');
        $name_brand = $request->input('name_brand');
        $des_brand = $request->input('des_brand');
        $status_brand = $request->input('status_brand');
      
        $p = DB::table('tb1_brand_product')
        ->join('tb1_category_product','tb1_category_product.category_id','=','tb1_brand_product.category_id')
        ->where('tb1_brand_product.brand_id', intval($id_brand))
        ->update(['tb1_brand_product.category_id' => $id_category, 'tb1_brand_product.brand_name' 
        => $name_brand, 'tb1_brand_product.brand_des' => $des_brand, 'tb1_brand_product.brand_status' 
        => intval($status_brand)]);

        Session::put('notification','Successful Data Entry');
        return redirect()->action([BrandController::class, "create_brand"]);
    }
    //--Brand frontend--//
    public function show_brand($brand_id)
    {
       
        $categorys = DB::table('tb1_category_product')->where('category_status','1')->get();
        $categorys_id = DB::table('tb1_category_product')
        ->join('products','products.category_id','=','tb1_category_product.category_id')
        ->join('tb1_brand_product','tb1_brand_product.category_id','=','tb1_category_product.category_id')
        ->where('brand_status',1)
        ->where('category_status',1)
        ->get();
        
        $brand=DB::table('tb1_brand_product')
        ->where('brand_status',1)
        ->get();

       
        $data_product=DB::table('products')
        ->orderBy('product_id', 'desc')->get();
        $news = DB::table('news_gundam')->where('news_status','1')->take(4)->get();
        
        // $filter = DB::table("products")
        // ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        // ->where('brand_status', 1)
        // ->orderBy('product_id', 'desc')
        // ->paginate(6)->appends(request()->query());

        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('tb1_brand_product.brand_id', $brand_id)
        ->where('brand_status', 1)
        ->orderBy('product_id', 'desc')
        ->get();
        
        $edit_brand=[
            'filter'=>$filter,
            'cate_edit'=> $categorys,
            'brand'=> $brand,
            'producthome'=> $data_product,
            'news_gundam'=> $news,
            'categorys_gundam'=>$categorys_id
        ];
        return view('frontend.show_brand',$edit_brand);
    }
}
