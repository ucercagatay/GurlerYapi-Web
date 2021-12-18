<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function deleteCategory(Request $request){
        CategoryModel::where('id',$request->delete)->delete();
        return redirect()->route('admin.dashboard');
    }
}
