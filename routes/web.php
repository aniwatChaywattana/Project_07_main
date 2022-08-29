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


//end promote

//Start::admin();

Auth::routes();

//   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//   Auth::routes();
//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/home',[App\Http\Controllers\HomeController::class,'index'])->name('adminpage.adminhome');
Route::get('/admin/product',[App\Http\Controllers\ProductController::class,'index'])->name('adminpage.adminproduct.product');
Route::get('/admin/typeproduct',[App\Http\Controllers\TypeproductController::class,'index'])->name('adminpage.admintypeproduct.typeproduct');
Route::get('/admin/info',[App\Http\Controllers\InfoController::class,'index'])->name('adminpage.admininfo.info');
Route::get('/admin/user',[App\Http\Controllers\UserController::class,'index'])->name('adminpage.adminuser.user');

// Route::get('/admin/home',[App\Http\Controllers\HomeController::class,'index'])->name('adminpage.adminhome');


//  End::admin//