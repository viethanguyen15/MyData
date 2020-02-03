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

// Route::get('', function () {
//     return view('welcome.welcome');
// });
// Route::get('admin/user', function () {
//     echo 'đây là trang user';
// });

// Route::get('admin/user/{name}', function ($name) {
//     echo "đây là trang user $name";
// });

// Route::get('admin/user/{name}/{address}','IndexController@getUser');




// // tham số động

// Route::get('users/{name}/{address}', function ($b,$a) {
//     echo "đây là trang user $b <br>";
//     echo "địa chỉ $a";
// });

// //VD
// Route::get('admin/shop/product-{id}','HomeController@getProduct');


//---------------PROJECT-------------

Route::get('user','UserController@getUser');

Route::get('user/add', 'UserController@getAddUser');
Route::post('user/add', 'UserController@postAddUser');

Route::get('user/edit/{idUser}','UserController@getEditUser');
Route::post('user/edit/{idUser}','UserController@postEditUser');

Route::get('user/del/{idUser}','UserController@DelUser');
Route::get('search','UserController@SearchUser' );

