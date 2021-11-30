<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{ protected $table='users';
protected $guarded='id';
    public function getRole(){
        return $this->belongsTo('App\Models\RoleModel','role_id','id');
    }
    use HasFactory;
}
