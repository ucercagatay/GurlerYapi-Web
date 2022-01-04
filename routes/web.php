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
Route::post('/subPost',[Controllers\BackController::class,'getSub'])->name('subscriber');
Route::post('/formpost',[Controllers\BackController::class,'newMessage'])->name('formPost');
Route::post('/deletemessage',[Controllers\DeleteController::class,'deleteMessage'])->name('deletemessage');
//Login
Route::get('/login',[Controllers\PageController::class,'loginScreen'])->middleware('is_out')->name('logScreen');
Route::post('/userpost',[Controllers\BackController::class,'loginControl'])->name('logpost');
Route::post('/logOut',[Controllers\BackController::class,'logOut'])->name('logOut');
//Panel Routeları
Route::prefix('/admin')->name('admin.')->middleware('is_login')->group(function () {
    Route::get('/dashboard',[Controllers\PageController::class,'dashboard'])->name('dashboard');
    //Admin Routeları
    Route::get('/showAdmins',[Controllers\BackController::class,'showUsers'])->name('showAdmins');
    Route::get('/newAdmins',[Controllers\BackController::class,'newAdminPage'])->name('newAdmin');
    Route::post('/newAdminPost',[Controllers\BackController::class,'newAdminCreate'])->name('newAdminPost');
    Route::get('/editadmins/{id}',[Controllers\UpdateController::class,'updateAdminPage'])->name('editAdmins');
    Route::post('/editadminsPost/{id}',[Controllers\UpdateController::class,'updateAdminPost'])->name('editAdminsPost');
    Route::post('/deleteAdmin',[Controllers\DeleteController::class,'deleteAdmin'])->name('deleteAdmin');
   //Kategori Routeları
    Route::get('/showCategories',[Controllers\BackController::class,'showCategories'])->name('showCategories');
    Route::get('/updateCategory/{id}',[Controllers\UpdateController::class,'updateCategory'])->name('updateCategory');
    Route::post('/postCategory/{id}',[Controllers\UpdateController::class,'updatePostCategory'])->name('catPostUpdate');
    Route::post('/deleteCategory',[Controllers\DeleteController::class,'deleteCategory'])->name('deleteCategory');
    Route::get('/newCategory',[Controllers\BackController::class,'catForm'])->name('catForm');
    Route::post('/addCategories',[Controllers\BackController::class,'addCategories'])->name('addCategories');
//Kategori Routeları bitiş
    //Alt Kategori Routeları
    Route::get('/showSubCategories',[Controllers\BackController::class,'showSubCategories'])->name('showSubCats');
    Route::post('/deleteSubCategory',[Controllers\DeleteController::class,'deleteSubCategory'])->name('deleteSub');
    Route::get('/updateSubCategory/{id}',[Controllers\UpdateController::class,'updateSubCatPage'])->name('updatepage');
    Route::post('/postSubCategory/{id}',[Controllers\UpdateController::class,'updateSubCatPost'])->name('SubCatPost');
    //Alt Kategori Bitiş
    //Content Routeları
    Route::get('/newProduct',[Controllers\BackController::class,'contentForm'])->name('product');
    Route::post('/products',[Controllers\BackController::class,'addContent'])->name('productPost');
    Route::get('/showProducts',[Controllers\BackController::class,'getContents'])->name('getContents');
    Route::post('/deleteProduct',[Controllers\DeleteController::class,'deleteContent'])->name('deleteContent');
    Route::get('/updateProduct/{id}',[Controllers\UpdateController::class,'updateProduct'])->name('updateProduct');
    Route::post('/updateProductPost/{id}',[Controllers\UpdateController::class,'updateProductPost'])->name('updateProductPost');
    //Content Routeları bitiş
    //Reference Routeları
    Route::get('/showReferences',[Controllers\SiteConfigController::class,'showReferences'])->name('showReferences');
    Route::get('/addReference',[Controllers\SiteConfigController::class,'addRef'])->name('addReferences');
    Route::post('/postReferences',[Controllers\SiteConfigController::class,'postRef'])->name('postReferences');
    Route::post('/deleteReference',[Controllers\DeleteController::class,'deleteReference'])->name('deleteReference');
    Route::get('/updateReference/{id}',[Controllers\UpdateController::class,'updateReferencePage'])->name('updatePage');
    Route::post('/updateReferencePost/{id}',[Controllers\UpdateController::class,'updateReferencePagePost'])->name('updatePostReference');
//Refernce routeları bitiş
    //Configs
    Route::get('/showSiteConfigs',[Controllers\SiteConfigController::class,'showConfigs'])->name('siteConfigshow');
    Route::get('/updateSiteConfig/{id}',[Controllers\UpdateController::class,'updateConfigPage'])->name('updateConfigPage');
    Route::post('/updatePostConfig/{id}',[Controllers\UpdateController::class,'PostConfigPage'])->name('updateConfig');
    Route::get('/showMessages',[Controllers\SiteConfigController::class,'showMessages'])->name('showMessages');
    Route::get('/showSubscribers',[Controllers\SiteConfigController::class,'showSubscribers'])->name('showSubscribers');
    Route::post('/deletesubs',[Controllers\DeleteController::class,'deleteSubscriber'])->name('deleteSubs');



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

