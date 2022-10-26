<?php

use Illuminate\Support\Facades\Auth;
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

//  Route::get('/', function () {
//      return view('welcome');
//  });


//start promote

Route::view('/','promotepage.home')->name('home');
Route::view('/about', 'promotepage.about')->name('about');
Route::view('/contact', 'promotepage.contact')->name('contact');
Route::view('/product', 'promotepage.product')->name('product');
Route::view('/product02', 'promotepage.product02')->name('product02');
Route::view('/product03', 'promotepage.product03')->name('product03');
Route::view('/product04', 'promotepage.product04')->name('product04');
Route::view('/blog', 'promotepage.blog')->name('blog');
Route::view('/feature', 'promotepage.feature')->name('feature');
Route::view('/testimonial', 'promotepage.testimonial')->name('testimonial');


//end promote

//Start::admin();

Auth::routes();

//   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//   Auth::routes();
//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// R Home
Route::get('/admin/home',[App\Http\Controllers\HomeController::class,'index'])->name('adminpage.adminhome');
// C Home
Route::get('/admin/homeadd',[App\Http\Controllers\ProductController::class,'formadd'])->name('adminpage.adminproduct.formadd');
Route::post('/admin/homeadd',[App\Http\Controllers\ProductController::class,'add'])->name('adminpage.adminproduct.add');
// U Home

Route::get('/admin/homeedit',[App\Http\Controllers\EditController::class,'index'])->name('adminpage.adminproduct.edit');

// R product
Route::get('/admin/product',[App\Http\Controllers\ProductController::class,'index'])->name('adminpage.adminproduct.product');
// C product
Route::get('/admin/product/add',[App\Http\Controllers\ProductController::class,'formadd'])->name('adminpage.adminproduct.formadd');
Route::post('/admin/product/add',[App\Http\Controllers\ProductController::class,'add'])->name('adminpage.adminproduct.add');
// U product 

Route::get('/admin/product/edit',[App\Http\Controllers\ProductController::class,'edit'])->name('adminpage.adminproduct.edit');

//R typeproduct
Route::get('/admin/typeproduct',[App\Http\Controllers\TypeproductController::class,'index'])->name('adminpage.admintypeproduct.typeproduct');
// C typeproduct
Route::get('/admin/typeproduct/add',[App\Http\Controllers\TypeproductController::class,'formadd'])->name('adminpage.admintypeproduct.formadd');
Route::post('/admin/typeproduct/add',[App\Http\Controllers\TypeproductController::class,'add'])->name('adminpage.admintypeproduct.add');
// U typeproduct 

Route::get('/admin/typeproduct/edit',[App\Http\Controllers\TypeproductController::class,'edit'])->name('adminpage.admintypeproduct.edit');

//R user
Route::get('/admin/user',[App\Http\Controllers\UserController::class,'index'])->name('adminpage.adminuser.user');
// C user
Route::get('/admin/user/add',[App\Http\Controllers\UserController::class,'formadd'])->name('adminpage.adminuser.formadd');
Route::post('/admin/user/add',[App\Http\Controllers\UserController::class,'add'])->name('adminpage.adminuser.add');
// U user

Route::get('/admin/user/edit',[App\Http\Controllers\UserController::class,'edit'])->name('adminpage.adminuser.edit');


// Route::get('/admin/home',[App\Http\Controllers\HomeController::class,'index'])->name('adminpage.adminhome');


//  End::admin//