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
Route::get('/',[Controllers\PageController::class,'mainPage'])->name('mainpage');
Route::post('/formpost',[Controllers\BackController::class,'newMessage'])->name('formPost');
//Login
Route::get('/login',[Controllers\PageController::class,'loginScreen'])->name('logScreen');
Route::post('/userpost',[Controllers\BackController::class,'loginControl'])->name('logpost');
//Panel Routeları
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/dashboard',[Controllers\PageController::class,'dashboard'])->name('dashboard');
});
//Front Routeları
Route::prefix('/pages')->name('front.')->group(function () {
   //Categori sayfası
    Route::get('/{language}/{url_slug}',[Controllers\PageController::class,'categoryPage'])->name('categoryPage');
   //Categori sayfası bitiş
    //Sub category sayfaları
    Route::get('/{language}/{url_slug}/{sub_category}',[Controllers\PageController::class,'contentPages'])->name('sub1_page');
    Route::get('/{language}/{url_slug}/{sub_category_2}',[Controllers\PageController::class,'contentPages'])->name('sub2_page');
    Route::get('/{language}/{url_slug}/{sub_category_3}',[Controllers\PageController::class,'contentPages'])->name('sub3_page');
    //Sub category bitiş

});

