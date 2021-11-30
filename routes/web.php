<?php

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
//Anasayfa ve Login Routeları
Route::get('/', function () {
    return view('welcome');
});
//Login
Route::get('/login', function () {});
//Panel Routeları
Route::prefix('/admin')->name('admin.')->group(function () {

});
//Front Routeları
Route::prefix('/pages')->name('front.')->group(function () {

});

