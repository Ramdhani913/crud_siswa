<?php

namespace App\Models;

use App\Models\Clas;
use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    //table
protected $table = 'clases';

//fillable
protected $guarded = [];

//relasi
public function users()
{
    return $this->hasMany(user::class, 'class_id');
}
}