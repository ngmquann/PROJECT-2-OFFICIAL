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
        ->orderBy('products.product_id', 'desc')->get();
        // $product=DB::table('products')->get();
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
            $tmp = $sale;
            DB::table('products')->where('product_id',intval($id))->update(['category_id'=>$category_pr,
            'brand_id'=>$brand_pr,'product_name'=>$name_product, 
            'product_price'=>intval($tmp),
            'sale'=>intval($price_product),
            'product_des'=>$des_product,
            'product_content'=>$content_product,
            'product_status'=>$status_product,
            'image'=>$imageName]);
            return redirect()->action([ProductControllers::class, "index"]);
    }
        // public function postUpdate(Request $request, $id) {
        //     $name = $request->input('name');
        //     $price = $request->input('price');
        //     $description = $request->input('description');
        //     // xử lý upload hình vào thư mục
        //     if($request->hasFile('image'))
        //     {
        //         $file=$request->file('image');
        //         $extension = $file->getClientOriginalExtension();
        //         if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
        //         {
        //             return redirect('product/update')->with('loi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
        //         }
        //             $imageName = $file->getClientOriginalName();
        //             $file->move("public/images",$imageName);
        //     } 
        //     else 
        //     { // không upload hình mới => giữ lại hình cũ
        //         $p = DB::table('products')
        //         ->where('product_id', intval($id))
        //         ->first();
        //         $imageName = $p->image;
        //     }
        //     $p = DB::table('products')->where('product_id', intval($id))->update(['category_id'=>$product['category_pr'],
        //     'brand_id'=>$product['brand_pr'],'product_name'=>$product['name_product'], 
        //     'product_price'=>intval($product['price_product']),
        //     'product_des'=>$product['des_product'],
        //     'product_content'=>$product['content_product'],
        //     'product_status'=>$product['status_product'],
        //     'image'=>$imageName]);
        //     return redirect()->action([ProductControllers::class, "index"]);
        // }
        
    // public function create_brand()
    // {
    //     $data_category=DB::table('tb1_category_product')->where('category_status', 1)->orderBy('category_id', 'desc')->get();
    //     $data_brand=DB::table('tb1_brand_product')->orderBy('brand_id', 'desc')->get();
    //     return view('brand.createbrand')->with(['datas'=>$data_brand])->with(['datas_category'=>$data_category]);
        
    // }
    // public function save_brand(Request $request)
    // {
    //     $brand = $request->all();
    //     DB::table('tb1_brand_product')->insert(['category_id'=>$brand['category_id'], 'brand_name'=>$brand['name_brand'], 'brand_des'=>$brand['des_brand'],'brand_status'=>$brand['status_brand']]);
    //     Session::put('notification','Successful Data Entry');
    //     return Redirect('/admin_brand');

    // }
    // public function unactive_brand($brand_id)
    // {
    //     DB::table('tb1_brand_product')->where('brand_id',$brand_id)->update(['brand_status'=>1]);
    //     Session::put('message_status','Success');
    //     return Redirect('admin_brand');
    // }
    // public function active_brand($brand_id)
    // {
    //     DB::table('tb1_brand_product')->where('brand_id',$brand_id)->update(['brand_status'=>0]);
    //     Session::put('message_status','Success');
    //     return Redirect('admin_brand');
    // }
    // public function delete_brand($brand_id) 
    // {
    //         $p = DB::table('tb1_brand_product')->where('brand_id', intval($brand_id))->delete();
    //         Session::put('message_status','Success');
    //         return redirect()->action([BrandController::class, "create_brand"]);
            
    // }
    // public function edit_brand($brand_id) 
    // {

    //     $data_brand=DB::table('tb1_brand_product')->orderBy('brand_id', 'desc')->get();
    //     $edit_brand = DB::table('tb1_brand_product')->where('brand_id', intval($brand_id))->get();
    //     return view('brand.edit_brand')->with(['edit_brand'=>$edit_brand])->with(['edit'=>$data_brand]);
       
    // }
    // public function post_update_brand(Request $request)
    // {
    //     $id_brand = $request->input('id_brand');
    //     $id_category = $request->input('category_id');
    //     $name_brand = $request->input('name_brand');
    //     $des_brand = $request->input('des_brand');
    //     $status_brand = $request->input('status_brand');
      
    //     $p = DB::table('tb1_brand_product')->where('brand_id', intval($id_brand))->update(['category_id' => $id_category, 'brand_name' => $name_brand, 'brand_des' => $des_brand, 'brand_status' => intval($status_brand)]);
    //     Session::put('notification','Successful Data Entry');
    //     return redirect()->action([BrandController::class, "create_brand"]);
    // }
}
