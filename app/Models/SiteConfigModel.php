<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfigModel extends Model
{
    use HasFactory;
    protected $table='site_config';
    protected $guarded ='id';
}
