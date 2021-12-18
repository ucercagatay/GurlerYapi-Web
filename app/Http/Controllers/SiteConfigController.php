<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use App\Models\ReferenceModel;
use App\Models\SiteConfigModel;
use App\Models\SubscribersModel;
use Illuminate\Http\Request;

class SiteConfigController extends Controller
{
    public function showConfigs(){
        $configs=SiteConfigModel::where('id',1)->get();

        return view('back.SiteConfigs.SiteConfigs',compact('configs'));
    }
    public function showReferences(){
        $references=ReferenceModel::all();
        return view('back.siteConfigs.References',compact('references'));
    }
    public function showMessages(){
        $messages=FormModel::all();
        return view('back.siteConfigs.messages.showMessages',compact('messages'));
    }
    public function showSubscribers(){
        $subs=SubscribersModel::all();
        return view('back.siteConfigs.showSubs',compact('subs'));
    }
}
