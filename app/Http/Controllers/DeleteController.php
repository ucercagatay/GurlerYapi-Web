<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ContentModel;
use App\Models\FormModel;
use App\Models\ReferenceModel;
use App\Models\SubCategoriesModel;
use App\Models\SubscribersModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function deleteCategory(Request $request){
        CategoryModel::where('id',$request->delete)->delete();
        return redirect()->route('admin.dashboard');
    }
    public function deleteSubCategory(Request $request){
        SubCategoriesModel::where('id',$request->delete)->delete();
        return redirect()->route('admin.dashboard');
    }
    public function deleteContent(Request $request){
        ContentModel::where('id',$request->delete)->delete();
        return redirect()->route('admin.dashboard');
    }
    public function deleteMessage(Request $request){
        FormModel::where('id',$request->delete)->delete();
        return redirect()->route('admin.dashboard');
    }
    public function deleteSubscriber(Request $request){
        SubscribersModel::where('id',$request->delete)->delete();
        return redirect()->route('admin.dashboard');
    }
    public function deleteReference(Request $request){
        ReferenceModel::where('id',$request->delete)->delete();
        return redirect()->route('admin.dashboard');
    }
    public function deleteAdmin(Request $request){
        UserModel::where('id',$request->delete)->delete();
        return redirect()->route('admin.dashboard');
    }
}
