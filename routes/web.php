<?php

use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeproductController;
use App\Http\Controllers\UserController;


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
Route::view('/products', 'promotepage.product')->name('product');
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
Route::get('/admin/home',[HomeController::class,'index'])->name('adminpage.adminhome');


// R content
Route::get('/admin/content',[ContentController::class,'index'])->name('adminpage.admincontent.content');
// C content
Route::get('/admin/content/add', [ContentController::class, 'formadd'])->name('adminpage.admincontent.formadd');
Route::post('/admin/content/create',[ContentController::class, 'add'])->name('adminpage.admincontent.create');
// U content


Route::get('/admin/content/edit/{id}', [ContentController::class, 'edit'])->name('adminpage.admincontent.edit');
Route::post('/admin/content/update/{id}', [ContentController::class, 'update'])->name('adminpage.admincontent.update');
Route::get('/admin/content/destroy/{id}', [ContentController::class, 'destroy'])->name('adminpage.admincontent.destroy');

// R product
Route::get('/admin/product',[ProductController::class,'index'])->name('adminpage.adminproduct.product');
// C product
Route::get('/admin/product/add',[ProductController::class,'formadd'])->name('adminpage.adminproduct.formadd');
Route::post('/admin/product/create',[ProductController::class,'add'])->name('adminpage.adminproduct.create');
// U product


Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('adminpage.adminproduct.edit');
Route::post('/admin/product/update/{id}', [ProductController::class, 'update'])->name('adminpage.adminproduct.update');
Route::get('/admin/product/destroy/{id}', [ProductController::class, 'destroy'])->name('adminpage.adminproduct.destroy');

//R typeproduct
Route::get('/admin/typeproduct',[TypeproductController::class,'index'])->name('adminpage.admintypeproduct.typeproduct');
// C typeproduct
Route::get('/admin/typeproduct/add',[TypeproductController::class,'formadd'])->name('adminpage.admintypeproduct.formadd');
Route::post('/admin/typeproduct/add',[TypeproductController::class,'add'])->name('adminpage.admintypeproduct.create');
// U typeproduct

Route::get('/admin/typeproduct/edit/{id}', [TypeproductController::class, 'edit'])->name('adminpage.admintypeproduct.edit');
Route::post('/admin/typeproduct/update/{id}', [TypeproductController::class, 'update'])->name('adminpage.admintypeproduct.update');
Route::get('/admin/typeproduct/destroy/{id}', [TypeproductController::class, 'destroy'])->name('adminpage.admintypeproduct.destroy');

//R user
Route::get('/admin/user',[UserController::class,'index'])->name('adminpage.adminuser.user');
// C user
Route::get('/admin/user/add',[UserController::class,'formadd'])->name('adminpage.adminuser.formadd');
Route::post('/admin/user/add',[UserController::class,'add'])->name('adminpage.adminuser.create');
// U user

Route::get('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('adminpage.adminuser.edit');
Route::post('/admin/user/update/{id}', [UserController::class, 'update'])->name('adminpage.adminuser.update');
Route::get('/admin/user/destroy/{id}', [UserController::class, 'destroy'])->name('adminpage.adminuser.destroy');


// Route::get('/admin/home',[App\Http\Controllers\HomeController::class,'index'])->name('adminpage.adminhome');


//  End::admin//
// Route::get('/',[welcomeController::class,'index']);
