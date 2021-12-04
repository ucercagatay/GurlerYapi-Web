<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
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
public function mainPage(){
        $categories=CategoryModel::where('language','türkçe')->get()->all();
        return view('welcome',compact('categories'));
}
}
