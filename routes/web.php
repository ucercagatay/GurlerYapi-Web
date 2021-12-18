<?php

use App\Models\CategoryModel;
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
Route::get('/test',[Controllers\AjaxController::class,'test'])->name('test');
//Anasayfa ve Login Routeları
Route::get('/',[Controllers\PageController::class,'mainPage'])->name('mainpage');
Route::post('/formpost',[Controllers\BackController::class,'newMessage'])->name('formPost');
//Login
Route::get('/login',[Controllers\PageController::class,'loginScreen'])->name('logScreen');
Route::post('/userpost',[Controllers\BackController::class,'loginControl'])->name('logpost');
//Panel Routeları
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/dashboard',[Controllers\PageController::class,'dashboard'])->name('dashboard');
    Route::get('/showCategories',[Controllers\BackController::class,'showCategories'])->name('showCategories');
    Route::get('/newCategory',[Controllers\BackController::class,'catForm'])->name('catForm');
    Route::get('/newProduct',[Controllers\BackController::class,'contentForm'])->name('product');
    Route::get('/showProducts',[Controllers\BackController::class,'getContents'])->name('getContents');
    Route::post('/products',[Controllers\BackController::class,'addContent'])->name('productPost');
    Route::post('/addCategories',[Controllers\BackController::class,'addCategories'])->name('addCategories');
    Route::get('/showSubCategories',[Controllers\BackController::class,'showSubCategories'])->name('showSubCats');
});
//Front Routeları
Route::prefix('/pages')->name('front.')->group(function () {
   //Categori sayfası
    Route::get('/{language}/{url_slug}/{id}',[Controllers\PageController::class,'categoryPage'])->name('categoryPage');
   //Categori sayfası bitiş
    //Sub category sayfaları
    Route::get('/{language}/{category_id}/{sub_category_url}/{sub_category_id}',[Controllers\PageController::class,'contentPages'])->name('contentPage');
    //Sub category bitiş
//İnner Page Sayfası
        Route::get('/products/{id}/',[Controllers\PageController::class,'detailPage'])->name('saleDetail');
    //İnner Page bitiş
});

