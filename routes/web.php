<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('master');
});
Route::get('/test', function () {
    return view('test');
});

//RAHAAAT
Route::get('/product/list', [ProductController::class,'productlist'])->name('product.list');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::post('product/update/{id}',[ProductController::class,'productupdate'])->name('product.update');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

//jahid
Route::resource('category', CategoryController::class);


//MH
Route::get('/brand/form',[BrandController::class,'showForm'])->name('brand.form');
Route::post('/brand/form',[BrandController::class,'storeForm'])->name('brand.store');
Route::post('/brand/update/{id}',[BrandController::class,'updateBrand'])->name('brand.update');
Route::get('Brand/delete/{id}',[BrandController::class,'deleteBrand'])->name('delete.brand');



