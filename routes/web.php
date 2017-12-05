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



//    login
Route::get('admin-login',[
    'uses'=>"AdminController@getAdminLogin",
    'as'=>'adminLogin'
]);

// đăng kí tào khoản
Route::get('admin-register',[
    'uses'=>"AdminController@getAdminRegister",
    'as'=>'adminRegister'
]);


Route::group(['prefix'=>'admin'],function(){ //yêu cầu phải login
    
    //    admin/
    Route::get('/',[
        'uses'=>"AdminController@getIndex",
        'as'=>'homepage'
    ]);

    //   admin/list-product
    Route::get('list-product',[
        'uses'=>"AdminController@getListProduct",
        'as'=>'listProduct'
    ]);






});
