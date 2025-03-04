<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// get data
Route::get('/get-product', [ProductController::class, 'getData']);
//Route::get('/get-product','ProductController@getData');

// menampilkan product yang baru dicreate
Route::get('/get-newProduct','ProductController@newProduct');


Route::post('/get-product','ProductController@getData');

// get data berdasarkan product url
Route::get('/get-product/{product_url}','ProductController@getDatabyId');

// create product
Route::post('/create/{id}','ProductController@create');

// get order
Route::get('/order','ProductController@showOrder');

Route::post('/order-update/{id}','ProductController@updateData');

Route::delete('/delete-data/{id}','ProductController@deleteData');

// create profile user yang order product
Route::post('/create-profile','UserController@createProfile');

// get invoice
Route::get('/invoice','UserController@invoice');

// search
Route::get('/search','ProductController@search');

// create product oleh admin
Route::post('/createProduct','ProductController@createProduct');

Route::get('/get-category','ProductController@category');

// halaman admin
// Route::get('/admin/order','AdminController@getAllOrder');
Route::get('/admin/order',[AdminController::class,'getAllOrder']);

Route::get('/category/{category_url}',[ProductController::class, 'product_category']);