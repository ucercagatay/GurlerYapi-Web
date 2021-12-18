<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function updateCategory(Request $request,$id){
        $category=CategoryModel::where('id',$request->id)->first();
        return view('back.categories.updateCategory',compact('category'));
    }
    public function updatePostCategory(Request $request,$id){
        $category=CategoryModel::find($request->id);
        $category->category_name = $request->category_name;
        $category->language = $request->language;
        $category->url_slug = $request->url_slug;
        $category->updated_at = now();
        $category->save();
        return back();
    }
}
