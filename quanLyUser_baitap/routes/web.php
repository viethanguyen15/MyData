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

// Route::get('users/detail', function () {
//     echo "i am php delvelop";
// });
// Route::get('users/{id}/{name}', function ($id, $name) {
//     echo "day la $id va ten  $name";
// });

//---------------User-------------
Route::get('user', 'UserController@getUser');
Route::get('user/add', 'UserController@getAddUser');
Route::get('user/edit', 'UserController@getEditUser');
