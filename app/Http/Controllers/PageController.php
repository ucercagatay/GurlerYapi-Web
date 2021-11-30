<?php

namespace App\Http\Controllers;

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
}
