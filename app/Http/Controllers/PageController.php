<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ContentModel;
use App\Models\SubCategoriesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //BACK PAGES
    public function loginScreen(){
        return view('back.dashboardpages.login-page');
    }
    //dashboard
    public function dashboard(){
        return view('back.panel');
    }
//Front Pages
//MainPage
public function mainPage(Request $request){
        $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
        $contents=ContentModel::where('category_id',2)->get()->all();
        return view('welcome',compact('categories','contents'));
}
public function categoryPage(Request $request,$id){
    $categories_content=CategoryModel::where('id',$request->id)->with('getContent')->first();
    $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
        return view('front.pages.forSale',compact('categories','categories_content'));
}

public function contentPages(Request $request,$sub_category_id,$category_id,$sub_category_url){
        $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
        $sub_category=SubCategoriesModel::where('sub_category_url',$request->sub_category_url)->first();
        $contents=ContentModel::where('sub_category_id',$request->sub_category_id)->with('subCat')->where('category_id',$request->category_id)->get();
        return view('front.pages.forSale2',compact('contents','categories','sub_category'));
}
public function detailPage(Request $request){
    $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
    $content=ContentModel::where('id',$request->id)->first();
    return view('front.pages.forSaleInner',compact('categories','content'));
}
}
