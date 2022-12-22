<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Frontend
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/homepage', 'App\Http\Controllers\HomeController@index');
Route::get('/aboutus', 'App\Http\Controllers\HomeController@aboutus');
Route::get('/shop', 'App\Http\Controllers\HomeController@shop');
Route::get('/service', 'App\Http\Controllers\HomeController@service');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
//Admin
Route::get('/adminstator', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');


Route::get('/register', 'App\Http\Controllers\AdminController@create');
Route::get('/logiin',function(){
    return view('registration.login');
});


// Route::post('/login', [AdminController::class, 'login'])->name("login");
Route::post('/register/user', [RegistrationController::class, 'register'])->name("register");

Route::post('/admin_dashboard', [AdminController::class, 'dashboard'])->name("register");

// Route::post('/admin_dashboard', 'App\Http\Controllers\AdminController@dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');
//CategoryProduct
Route::get('/add_category_product', 'App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/all_category_product', 'App\Http\Controllers\CategoryProduct@all_category_product');
Route::post('/save_category_product', 'App\Http\Controllers\CategoryProduct@save_category_product');
Route::get('/active_category_product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@active_category_product');
Route::get('/unactive_category_product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/edit_category_product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete_category_product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product');
Route::post('/update_category_product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@update_category_product');
//Products
Route::get('/add_product', 'App\Http\Controllers\ProductController@add_product');
Route::get('/all_product', 'App\Http\Controllers\ProductController@all_product');
Route::post('/save_product', 'App\Http\Controllers\ProductController@save_product');
Route::get('/active_product/{product_id}', 'App\Http\Controllers\ProductController@active_product');
Route::get('/unactive_product/{product_id}', 'App\Http\Controllers\ProductController@unactive_product');
Route::get('/edit_product/{product_id}', 'App\Http\Controllers\ProductController@edit_product');
Route::get('/delete_product/{product_id}', 'App\Http\Controllers\ProductController@delete_product');
Route::post('/update_product/{product_id}', 'App\Http\Controllers\ProductController@update_product');
Route::get('/detail_product/{product_id}', 'App\Http\Controllers\ProductController@detail_product');
Route::post('/save_cart', 'App\Http\Controllers\CartController@save_cart');
Route::get('/show_cart', 'App\Http\Controllers\CartController@show_cart');
//User

Route::get('admin/user/list', 'App\Http\Controllers\UserController@list')->name('list');
Route::get('admin/user/add', 'App\Http\Controllers\UserController@add');
Route::get('admin/user/delete/{id}', 'App\Http\Controllers\UserController@delete')->name('delete_user');
Route::get('admin/user/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('edit_user');
// Route::post('admin/user/update1/{id}', 'App\Http\Controllers\UserController@update')->name('update_user');
Route::post('admin/user/store', 'App\Http\Controllers\UserController@store')->name('add_user');

Route::post('/admin/update/user/{id}', [UserController::class, 'update'])->name("updateUser");

// Route::post('/admin/users/update/{id}', [UserController::class, 'update']);


Route::post('/login', [AdminController::class, 'store'])->name("store");
Route::get('/login', [AdminController::class, 'create'])->name("create");
// Route::get('/login', 'AdminController@create');
// Route::post('/login', 'AdminController@store');

