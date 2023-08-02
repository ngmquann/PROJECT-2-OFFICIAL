<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllers;
use App\Http\Controllers\ProductController1;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//--Frontend--//
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home']);
Route::get('/show_category_detail/{category_id}', [CategoryController::class, 'show_category']);
// Route::get('/show_category_detail/{category_id}', [NewsController::class, 'show_news']);
Route::get('/show_category_detail/show_brand_detail/{brand_id}', [BrandController::class, 'show_brand']);
Route::get('/news', [HomeController::class, 'news']);
//--admin--//
Route::get('/test', [testcontroller::class, 'test']);

//--category admin--//
Route::get('/admin_category', [CategoryController::class, 'create_category']);
Route::post('/save_category', [CategoryController::class, 'save_category']);
Route::get('/unactive_categorystatus/{category_id}', [CategoryController::class, 'unactive_category']);
Route::get('/active_categorystatus/{category_id}', [CategoryController::class, 'active_category']);
Route::get('/update_category/{category_id}', [CategoryController::class, 'edit_category']);
Route::post('/post_update_category/{category_id}', [CategoryController::class, 'post_update_category']);
Route::get('/delete_category/{category_id}', [CategoryController::class, 'delete_category']);
// });
//--brand admin--//
Route::get('/admin_brand', [BrandController::class, 'create_brand']);
Route::post('/save_brand', [BrandController::class, 'save_brand']);
Route::get('/unactive_brandstatus/{brand_id}', [BrandController::class, 'unactive_brand']);
Route::get('/active_brandstatus/{brand_id}', [BrandController::class, 'active_brand']);
Route::get('/update_brand/{brand_id}', [BrandController::class, 'edit_brand']);
Route::post('/post_update_brand/{brand_id}', [BrandController::class, 'post_update_brand']);
Route::get('/delete_brand/{brand_id}', [BrandController::class, 'delete_brand']);
// });

//--login admin--//
Route::get('/login_admin', [Admincontroller::class, 'login_admins']);
Route::post('/check_login', [Admincontroller::class, 'check_login']);
//--admin_category--//


//--show_product--//
Route::get('/model', [ProductController1::class, 'showProductHome']);

// show_new
Route::get('/news', [HomeController::class, 'news']);
Route::get('/news/{news_id}', [HomeController::class, 'show_news']);

//--profile user--//
Route::get('/profile/{customer_id}', [ProfileController::class, 'getProfile'])->name('profile');
Route::post('/profile/{customer_id}/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('/profile/{customer_id}/change_pass', [ProfileController::class, 'changePass'])->name('changePass');

//--product admin--//
Route::get('/admin_product',[ProductControllers::class,'index']);
Route::get('/create_product',[ProductControllers::class,'create']);
Route::post('/product/postCreate', [ProductControllers::class, 'postCreate']);
Route::get('/unactive_productstatus/{product_id}',[ProductControllers::class,'unactive_product']);
Route::get('/active_productstatus/{product_id}',[ProductControllers::class,'active_product']);
Route::get('/update_product/{product_id}',[ProductControllers::class,'edit_product']);
Route::post('/post_update_product/{product_id}',[ProductControllers::class,'postCreateUpdate']);
Route::get('/delete_product/{product_id}',[ProductControllers::class,'delete']);
// });

//--news admin--//
Route::get('/admin_news',[NewsController::class,'index']);
Route::get('/create_news',[NewsController::class,'create']);
Route::post('/news/postCreate', [NewsController::class, 'postCreate']);
Route::get('/unactive_newsstatus/{news_id}',[NewsController::class,'unactive_news']);
Route::get('/active_newsstatus/{news_id}',[NewsController::class,'active_news']);
Route::get('/update_news/{news_id}',[NewsController::class,'edit_news']);
Route::post('/post_update_news/{news_id}',[NewsController::class,'postCreateUpdate']);
Route::get('/delete_news/{news_id}',[NewsController::class,'delete']);
// });

//--news Tag--//
Route::get('news/tags', [NewsController::class, 'news_tags']);
Route::post('/news/save_tag', [NewsController::class, 'save_tag']);
Route::get('/news/delete_tags/{tag_id}', [NewsController::class, 'delete_tag']);

//--user register--//
Route::get('/register',[RegisterController::class,'get'])->name('get');
Route::post('/register',[RegisterController::class,'register'])->name('register');

//--user login--//
Route::get('/login',[RegisterController::class,'showLogin'])->name('showLogin');
Route::post('/login_user',[RegisterController::class,'login'])->name('login_user');
Route::get('/logout',[RegisterController::class,'logout'])->name('logout');

//--product detail--//
Route::get('/product_detail/{product_id}',[ProductDetailController::class,'get']);

//--Contact--//
Route::get('/contact',[ContactController::class,'get']);

//--Cart--//
Route::get('/show-cart',[CartController::class,'showCart'])->name('showCart');
Route::get('/update-cart',[CartController::class,'updateCart'])->name('updateCart');
Route::get('/delete-cart',[CartController::class,'deleteCart'])->name('deleteCart');
