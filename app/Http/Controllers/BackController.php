<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use App\Models\RoleModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BackController extends Controller
{
    public function loginControl(Request $request){
        $user=RoleModel::find(UserModel::where('email',$request->email)->first()->role_id)->role_name;
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
               if($user=='Admin'){
                   return redirect()->route('admin.dashboard');
               }
               else{
                   return back()->withErrors('Giriş Yetkiniz yoktur');
               }
            }
else {
    return back();
}
//Form İşlemleri
//Anasayfa Form Gönderim İşlemi
    }
    public function newMessage(Request $request){
        DB::table('forms')->insert([
            'name'=>$request->input('name'),
            'surname'=>$request->input('surname'),
            'email'=>$request->input('email'),
            'phoneNumber'=>$request->input('phoneNumber'),
            'option'=>$request->input('option'),
            'message'=>$request->input('message'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return back();
    }
//Form görüntüleme
public function getMessages(){
        $messages=FormModel::all();

}
}
