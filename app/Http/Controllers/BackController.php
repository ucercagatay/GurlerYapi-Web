<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ContentModel;
use App\Models\FormModel;
use App\Models\RoleModel;
use App\Models\SubCategoriesModel;
use App\Models\UserModel;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

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
    return back()->withSuccess(2);
}
//Form İşlemleri
//Anasayfa Form Gönderim İşlemi
    }
    public function logOut() {
        Auth::logout();
        return view('logScreen')->withSuccess(1);
    }
    public function newMessage(Request $request){
        $validator=\Illuminate\Support\Facades\Validator::make($request->all(),[
            'name' =>'required|min:3|max:30',
            'surname'=>'required|min:3|max:24',
            'email'=>'required|email',
            'phoneNumber'=>'required',
            'option'=>'required',
            'message'=>'min:3|max:240',
        ]);
            if($validator->fails()){
                return Redirect::to(URL::previous().'#contact')->withErrors($validator,'message');
            }
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
//Form Silme

//Form işlemleri bitiş
//Content İşlemleri
//görüntüleme
public function getContents(){
        $category1=CategoryModel::where('id',2)->get();
        $category2=CategoryModel::where('id',3)->get();
        $subCats1=SubCategoriesModel::where('category_id',2)->get();
        $subCats2=SubCategoriesModel::where('category_id',3)->get();
        $contents=ContentModel::all();
        return view('back.contents.showContent',compact('contents','category1','category2','subCats1','subCats2'));
}
//Ekleme
public function contentForm(){
        $categories=CategoryModel::all();
        $subCats=SubCategoriesModel::all();
        return view('Back.Contents.addContent',compact('categories','subCats'));
}
public function addContent(Request $request){
        $content= new ContentModel();
        $content->category_id = $request->category_id;
        $content->sub_category_id = $request->sub_category_id;
        $content->title = $request->title;
        $content->language = $request->language;
        $content->content_url_slug = $request->content_url_slug;
        $content->content_text = $request->content_text;
        if ($request->hasFile('photo_1')) {
        $imageName = $request->title . '.' . $request->photo_1->getClientOriginalExtension();
        $request->photo_1->move(public_path('uploads'), $imageName);
        $content->photo_1 = 'uploads/' . $imageName;
    }
    if ($request->hasFile('photo_2')) {
        $imageName = $request->title . '2.' . $request->photo_2->getClientOriginalExtension();
        $request->photo_2->move(public_path('uploads'), $imageName);
        $content->photo_2 = 'uploads/' . $imageName;
    }
    if ($request->hasFile('photo_3')) {
        $imageName = $request->title . '3.' . $request->photo_3->getClientOriginalExtension();
        $request->photo_3->move(public_path('uploads'), $imageName);
        $content->photo_3 = 'uploads/' . $imageName;
    }
    $content->save();
        return redirect()->route('admin.dashboard');
}
//Kategori İşlemleri
//Görüntüleme
public function showCategories(){
        $categories=CategoryModel::all();
        return view('back.categories.showCategory',compact('categories'));
}
public function catForm(){
        return view('back.categories.addCategory');
}
//Ekleme
public function addCategories(Request $request){
        DB::table('categories')->insert([
        'category_name'=>$request->input('category_name'),
            'language'=>$request->input('language'),
            'url_slug'=>$request->input('url_slug'),
            'created_at'=>now(),
        ]);
        return redirect()->route('admin.dashboard');
}


//Silme

//Güncelleme


//Bitiş

//Sub Kategori İşlemleri
//Görüntüleme
public function showSubCategories(){
        $subCats=SubCategoriesModel::all();
        $category1=CategoryModel::where('id',2)->get();
        $category2=CategoryModel::where('id',3)->get();
        return view('back.SubCategories.showSubCats',compact('subCats','category1','category2'));
}
//Ekleme



//Silme

//Güncelleme


//Bitiş
}
