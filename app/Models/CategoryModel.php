<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table='categories';
    public $primaryKey='id';
    public function SubCategory(){
        return $this->hasMany('App\Models\SubCategoriesModel','category_id','id');
    }
    public function getContent(){
        return $this->belongsTo('App\Models\ContentModel','category_id','id');
    }
    use HasFactory;
}
