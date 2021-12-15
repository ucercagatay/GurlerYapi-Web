<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
    protected $table='contents';
    public $primaryKey='id';
    public function getCategory(){
        return $this->hasOne('App\Models\CategoryModel','id','category_id');
    }
    public function subCat(){
        return $this->hasOne('App\Models\SubCategoriesModel','id','sub_category_id');
    }
    use HasFactory;
}
