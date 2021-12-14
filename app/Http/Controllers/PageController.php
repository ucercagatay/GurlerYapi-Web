<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ContentModel;
use App\Models\SubCategoriesModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //BACK PAGES
    public function loginScreen(){
        return view('back.dashboardpages.login-page');
    }
    //dashboard
    public function dashboard(){
        return view('back.dashboardpages.dashboard');
    }
//Front Pages
//MainPage
public function mainPage(Request $request){
        $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
        $contents=ContentModel::where('category_id',$request->category_id)->get()->all();
        return view('welcome',compact('categories','contents'));
}
public function categoryPage(Request $request,$id){
    $categories_content=CategoryModel::where('id',$request->id)->with('getContent')->first();
    $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
        return view('front.pages.forSale',compact('categories','categories_content'));
}

public function contentPages(Request $request,$id){
    $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
    $sub_categories=SubCategoriesModel::where('id',$request->id)->with('content')->first();
     return view('front.pages.forSale2',compact('sub_categories','categories'));
}
public function ınnerPage(Request $request,$id){
    $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
    $contents=ContentModel::where('id',$request->id)->get();
    return view('front.pages.forSaleInner',compact('categories',));
}
}
