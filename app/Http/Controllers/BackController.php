<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    }


}
