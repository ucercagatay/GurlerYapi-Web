<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ContentModel;
use App\Models\FormModel;
use App\Models\ReferenceModel;
use App\Models\SiteConfigModel;
use App\Models\SubCategoriesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //BACK PAGES
    public function loginScreen(){
        return view('back.login');
    }
    //dashboard
    public function dashboard(){
        $user = Auth::user();
        $contentSa=ContentModel::where('id',2)->get();
        $contents=ContentModel::where('id',3)->get();
        $messages=FormModel::all();
        return view('back.panel',compact('user','contents','contentSa','messages'));
    }
//Front Pages
//MainPage
public function mainPage(Request $request){
        $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
        $about=ContentModel::where('title','Hakkımızda')->get();
        $contents=ContentModel::where('category_id',2)->get()->all();
        $site_config=SiteConfigModel::where('id',1)->first();
        $references=ReferenceModel::all();
        return view('welcome',compact('categories','contents','about','site_config','references'));
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
