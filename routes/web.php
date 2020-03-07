<?php

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
//Route::METHOD(path_string,HANDLE_FUNCITON);
// Method : post get put delete ...  CRUD


/*
*Lưu ý
 * chạy URL trên trình duyệt --> method get
 */
Route ::get("/danh-sach-lop-hoc","WebController@classRoom");

// Route::METHOD(path_string,Controller@function_in_controller);
Route::get("/form-news",function (){
    return view('form_news');
});
Route::get("/form-list-user",function (){
    return view('list_user');
});


//Route ::get("/form-list-user","UserController@listName");
Route ::get("/form-edit","UserController@listName");

Route ::get("/","WebController@home");
Route ::get("/product","WebController@product");
Route ::get("/listing/{id}","WebController@listing");
Route ::get("/cart","WebController@cart");

