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
    $categories_content=CategoryModel::where('id',$request->id)->first();
    $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
        return view('front.pages.forSale',compact('categories','categories_content'));
}

public function contentPages($sub_category_url){
    $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
    $sub_categories=SubCategoriesModel::where('sub_category_url',$sub_category_url)->with('content')->first();
            dd($sub_categories);
     return view('front.pages.contentPages',compact('sub_categories','categories'));
}
}
