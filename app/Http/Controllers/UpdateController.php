<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ContentModel;
use App\Models\SubCategoriesModel;
use Illuminate\Database\Eloquent\Model;
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
    public function updateSubCatPost(Request $request){
        $subCat=SubCategoriesModel::find($request->id);
        $subCat->name =$request->name;
        $subCat->sub_category_url = $request->sub_category_url;
        $subCat->category_id = $request->category_id;
        $subCat->updated_at = now();
        $subCat->save();
        return back();
    }
    public function updateSubCatPage(Request $request){
        $categoryy1=CategoryModel::where('id',2)->get();
        $categoryy2=CategoryModel::where('id',3)->get();
        $subCat=SubCategoriesModel::where('id',$request->id)->first();
        return view('back.SubCategories.updateSubCats', compact('subCat','categoryy1','categoryy2'));
    }

    public function updateProduct(Request $request){
        $content=ContentModel::where('id',$request->id)->first();
        $categories=CategoryModel::all();
        $subcats=SubCategoriesModel::all();
        return view('back.contents.updateContent',compact('subcats','content','categories'));
    }
    public function updateProductPost(request $request){
        $content= ContentModel::find('id',$request->id);
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
}
