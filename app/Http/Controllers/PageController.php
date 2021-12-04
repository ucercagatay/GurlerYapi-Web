<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ContentModel;
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
        $categories=CategoryModel::where('language','türkçe')->get()->all();
        $contents=ContentModel::where('category_id',$request->category_id)->get()->all();
        return view('welcome',compact('categories','contents'));
}
public function contentPages(){
        $categories=CategoryModel::where('language','türkçe')->get()->all();
        $contents=ContentModel::where('language','türkçe')->get()->all();
        return view('back.front.contentPage',compact('categories','contents'));
}
}
