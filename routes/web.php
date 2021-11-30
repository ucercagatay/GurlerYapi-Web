<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::get('/login',[Controllers\PageController::class,'loginScreen'])->name('logScreen');
Route::post('/userpost',[Controllers\BackController::class,'loginControl'])->name('logpost');
//Panel Routeları
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/dashboard',[Controllers\PageController::class,'dashboard'])->name('dashboard');
});
//Front Routeları
Route::prefix('/pages')->name('front.')->group(function () {

});

