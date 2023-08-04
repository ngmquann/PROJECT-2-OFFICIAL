<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class ProductControllers extends Controller
{
    public function index()
    {
        // $category=DB::table('tb1_category_product')->where('category_status', 1)->orderBy('category_id','desc')->get();
        $product=DB::table('products')
        ->join('tb1_category_product','tb1_category_product.category_id','=','products.category_id')
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('category_status', 1)
        ->where('brand_status', 1)
        ->orderBy('products.product_id', 'desc')
        ->paginate(10)->appends(request()->query());
        return view('product.index')->with(['product_pr'=>$product]);
    }
    public function create() 
    {
        $category=DB::table('tb1_category_product')->where('category_status', 1)->orderBy('category_id','desc')->get();
        $brand=DB::table('tb1_brand_product')->where('brand_status', 1)->orderBy('brand_id','desc')->get();
        return view('product.creates')->with(['category_pr'=>$category])->with(['brand_pr'=>$brand]);
    }
    public function unactive_product($product_id)
    {
        DB::table('products')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message_status','Success');
        return Redirect('admin_product');
    }
    public function active_product($product_id)
    {
        DB::table('products')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message_status','Success');
        return Redirect('admin_product');
    }
    public function delete($id) 
        {
            $p = DB::table('products')
            ->where('product_id', intval($id))
            ->delete();
            return redirect()->action([ProductControllers::class,"index"]);
        }
    public function edit_product($id) 
    {
        // $p = DB::table('products')->where('product_id', intval($id))->first();
        $data_brand=DB::table('tb1_brand_product')
        // ->join('tb1_category_product','tb1_category_product.category_id','=','tb1_brand_product.category_id')
        ->where('brand_status',1)
        ->get();
        $product=DB::table('products')
        // ->join('tb1_category_product','tb1_category_product.category_id','=','products.category_id')
        // ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('product_id', intval($id))
        ->get();
        $category=DB::table('tb1_category_product')
        ->where('category_status',1)
        ->get();
        $data = [
            'edit_ps' => $product,
            'edit_brand'=>$data_brand,
            'category'=>$category
        ];

        
        return view('product.updates',$data);
    }
    public function postCreate(Request $request) 
    {
        // nhận tất cả tham số vào mảng product
        $product = $request->all();
        // xử lý upload hình vào thư mục
        $get_image=$request->file('image');
        if($get_image)
        {

            $extension = $get_image->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return Redirect('create_product')->with('Error','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $get_image->getClientOriginalName();
            $get_image->move('images',$imageName);
            $product['images']=$imageName;
        }
        else
        {
            $imageName = null;
        }
            DB::table('products')->insert(['category_id'=>$product['category_pr'],
            'brand_id'=>$product['brand_pr'],'product_name'=>$product['name_product'], 
            'product_price'=>$product['price_product'],
            'sale'=>$product['sale'],
            'product_des'=>$product['des_product'],
            'product_content'=>$product['content_product'],
            'product_status'=>$product['status_product'],
            'image'=>$imageName]);
            return redirect()->action([ProductControllers::class, "index"]);
    }
    public function postCreateUpdate(Request $request,$id) 
    {
        // nhận tất cả tham số vào mảng product
        $name_product = $request->input('name_product');
        $price_product = $request->input('price_product');
        $sale = $request->input('sale');
        $des_product = $request->input('des_product');
        $content_product = $request->input('content_product');
        $status_brand = $request->input('status_brand');
        $category_pr=$request->input('category_pr');
        $brand_pr=$request->input('brand_pr');
        $status_product=$request->input('status_product');
        $get_image=$request->file('image');
        if($get_image)
        {

            $extension = $get_image->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return Redirect('create_product')->with('Error','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $get_image->getClientOriginalName();
            $get_image->move('images',$imageName);
            
        }
        else
        {
            $p = DB::table('products')
            ->where('product_id', intval($id))
            ->first();
            $imageName = $p->image;
        }
            DB::table('products')->where('product_id',intval($id))->update(['category_id'=>$category_pr,
            'brand_id'=>$brand_pr,'product_name'=>$name_product, 
            'product_price'=>$price_product,
            'sale'=>$sale,
            'product_des'=>$des_product,
            'product_content'=>$content_product,
            'product_status'=>$status_product,
            'image'=>$imageName]);
            return redirect()->action([ProductControllers::class, "index"]);
    }
       
    public function search(Request $request){
        $keyword = $request->keyword;
        $search_product=DB::table('products')
        ->join('tb1_category_product','tb1_category_product.category_id','=','products.category_id')
        ->join('tb1_brand_product','tb1_brand_product.brand_id','=','products.brand_id')
        ->where('category_status', 1)
        ->where('brand_status', 1)
        ->where('product_name', 'like', '%'.$keyword. '%')
        ->paginate(10)->appends(request()->query());
        return view('product.search')->with('search_product', $search_product);
    }
}
