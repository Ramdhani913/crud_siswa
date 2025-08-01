<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
   public function store (Request $request) {
      
      $request -> validate([
         'kelas'     => 'required',
         'name'         => 'required',
         'nisn'         => 'required',
         'alamat'       => 'required',
         'email'        => 'required',
         'password'     => 'required',
         'no_handphone' => 'required',
      ]);

      $datauser_store =[
         'class_id'     => $request->kelas,
         'photo'         => 'photo.jpg',
         'name'         => $request->name,
         'nisn'         => $request->nisn,
         'alamat'       => $request->alamat,
         'email'        => $request->email,
         'password'     => $request->password,
         'no_handphone' => $request->no_handphone,
      ];

      User::create($datauser_store);

      return redirect ('/');
   }
 }
