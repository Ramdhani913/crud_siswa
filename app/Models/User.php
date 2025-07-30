<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //table

    //fillable
    protected $guarded = [];

    //relasi
    public function clases()
    {
    return $this->belongsTo(clas::class, 'class_id');
   } 
}
