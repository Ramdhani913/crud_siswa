<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clas extends Model
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