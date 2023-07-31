<?php

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

Route::get('/', [HomeController::class, 'home'])->name('home');
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
