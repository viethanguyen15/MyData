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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/ha', function () {
    return 'hello ha';
});

Route::get('category', function () {
    echo 'day la danh muc dien thoai';
})->middleware('CheckCategory')->name('category');

Route::get('error', function () {
    echo 'error';
})->name('error');

Route::get('showCategory', function () {
    return view('showCate');
})->name('showCate');
