<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ContentModel;
use App\Models\SubCategoriesModel;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /*public function extest(Request $request,$sub_category_id,$category_id,$sub_category_url){
        $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
        $sub_category=SubCategoriesModel::where('sub_category_url',$request->sub_category_url)->first();
        $contents=ContentModel::where('sub_category_id',$request->sub_category_id)->with('subCat')->where('category_id',$request->category_id)->get()->all();
        return view('test',compact('contents','categories','sub_category'));
    }*/
    public function test(Request $request,$id){
        $categories=CategoryModel::where('language','türkçe')->with('subCategory')->get();
        $content=ContentModel::where('id',$request->id)->first();
        return view('test',compact('categories','content'));
    }
}
