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
    public function addRef(){
        return view('back.siteConfigs.addReferences');
    }
    public function postRef(Request $request){
        $reference = new ReferenceModel();
        $reference->reference_name = $request->reference_name;
        $reference->reference_link =$request->reference_link;
        if($request->hasFile('photo')){
            $imageName =  $request->id  . '.' .$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('uploads'), $imageName);
            $reference->photo = 'uploads/references' . $imageName;
        }
        $reference->save();
        return back();
    }
}
