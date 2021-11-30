<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{   protected $table='roles';
    protected $guarded='id';
    public function getUser(){
        return $this->hasMany('App\Models\UserModel','role_id','id');
    }
    use HasFactory;
}
