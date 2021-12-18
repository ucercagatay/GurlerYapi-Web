<?php

namespace App\Http\Controllers;

use App\Models\ReferenceModel;
use App\Models\SiteConfigModel;
use Illuminate\Http\Request;

class SiteConfigController extends Controller
{
    public function showConfigs(){
        $configs=SiteConfigModel::where('id',1)->get();

        return view('back.SiteConfigs.SiteConfigs',compact('configs'));
    }
    public function showReferences(){
        $references=ReferenceModel::all();
        return view('back.siteConfigs.showReferences',compact('references'));
    }
}
