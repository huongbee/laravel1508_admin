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
})->name('notAdmin');



//    login
Route::get('admin-login',[
    'uses'=>"AdminController@getAdminLogin",
    'as'=>'adminLogin'
]);
Route::post('admin-login',[
    'uses'=>"AdminController@postAdminLogin",
    'as'=>'adminLogin'
]);
Route::get('admin-logout',[
    'uses'=>"AdminController@getAdminLogout",
    'as'=>'adminLogout'
]);

// đăng kí tài khoản
Route::get('admin-register',[
    'uses'=>"AdminController@getAdminRegister",
    'as'=>'adminRegister'
]);
Route::post('admin-register',[
    'uses'=>"AdminController@postAdminRegister",
    'as'=>'adminRegister'
]);


Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){ //yêu cầu phải login
    
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
