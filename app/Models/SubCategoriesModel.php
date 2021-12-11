<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoriesModel extends Model
{
    protected $table='sub_categories';
    public $primaryKey='id';
    public function getCategory(){
        return $this->hasOne('App\Models\CategoryModel','category_id','id');
    }
    public function content(){
        return $this->belongsTo('App\Models\ContentModel','sub_category_id','id');
    }
    use HasFactory;
}
