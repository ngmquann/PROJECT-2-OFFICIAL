<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;


class CategoryController extends Controller
{
    public function create_category()
    {
        $data_category=DB::table('tb1_category_product')->orderBy('category_id', 'desc')->get();
        return view('category.createcategory')->with(['datas'=>$data_category]);
        
    }
    public function data_category()
    {
        
    }
    public function save_category(Request $request)
    {
        $category = $request->all();
        DB::table('tb1_category_product')->insert(['category_name'=>$category['name_category'], 'category_des'=>$category['des_category'],'category_status'=>$category['status_category']]);
        Session::put('notification','Successful Data Entry');
        return Redirect('/admin_category');

    }
    public function unactive_category($category_id)
    {
        DB::table('tb1_category_product')->where('category_id',$category_id)->update(['category_status'=>1]);
        Session::put('message_status','Success');
        return Redirect('admin_category');
    }
    public function active_category($category_id)
    {
        DB::table('tb1_category_product')->where('category_id',$category_id)->update(['category_status'=>0]);
        Session::put('message_status','Success');
        return Redirect('admin_category');
    }
    public function delete_category($category_id) 
    {
            $p = DB::table('tb1_category_product')->where('category_id', intval($category_id))->delete();
            Session::put('message_status','Success');
            return redirect()->action([CategoryController::class, "create_category"]);
            
    }
    public function edit_category($category_id) 
    {

        $data_category=DB::table('tb1_category_product')->orderBy('category_id', 'desc')->get();
        $edit_category = DB::table('tb1_category_product')->where('category_id', intval($category_id))->get();
        return view('category.edit_category')->with(['edit_category'=>$edit_category])->with(['edit'=>$data_category]);
       
    }
    public function post_update_category(Request $request)
    {
        $id_category = $request->input('id_category');
        $name_category = $request->input('name_category');
        $des_category = $request->input('des_category');
        $status_category = $request->input('status_category');
      
        $p = DB::table('tb1_category_product')->where('category_id', intval($id_category))->update(['category_name' => $name_category, 'category_des' => $des_category, 'category_status' => intval($status_category)]);
        return redirect()->action([CategoryController::class, "create_category"]);
    }
    //end fuction admin category
    public function show_category($category_id)
    {
       
        $categorys = DB::table('tb1_category_product')
        // ->join('products','products.category_id','=','tb1_category_product.category_id')
        // ->join('news_gundam','news_gundam.category_id','=','tb1_category_product.category_id')
        ->where('category_status','1')->get();
        $categorys_id = DB::table('tb1_category_product')
        ->join('products','products.category_id','=','tb1_category_product.category_id')
        // ->join('news_gundam','news_gundam.category_id','=','tb1_category_product.category_id')
        ->where('products.category_id',$category_id)
        // ->where('news_gundam.category_id',$category_id)
        ->where('category_status',1)->take(1)->get();
        $brand=DB::table('tb1_brand_product')
        ->where('brand_status',1)
        ->get();
        $data_product=DB::table('products')
        ->orderBy('product_id', 'desc')->get();
        $news = DB::table('news_gundam')->where('news_status','1')->take(4)->get();
        
       
        $filter = DB::table("products")
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('brand_status', 1)
        ->orderBy('product_id', 'desc')
        ->paginate(6)->appends(request()->query());
        
        $edit_cate=[
            'filter'=>$filter,
            'cate_edit'=> $categorys,
            'brand'=> $brand,
            'producthome'=> $data_product,
            'news_gundam'=> $news,
            'categorys_gundam'=>$categorys_id
        ];
        return view('frontend.show_category',$edit_cate);
    }
} 
