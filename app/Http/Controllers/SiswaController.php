<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{

   public function index() {

      $siswas = User::all();

      return view('siswa.index', compact('siswas'));
   }


   public function create() { 

      $clases = Clas::all();

      return view('siswa.create', compact('clases'));
   }

   public function store (Request $request) {

      $request -> validate([
         'kelas'     => 'required',
         'name'         => 'required',
         'nisn'         => 'required | unique:users,nisn',
         'alamat'       => 'required',
         'email'        => 'required | unique:users,email',
         'password'     => 'required',
         'no_handphone' => 'required | unique:users,no_handphone',
      ]);

      $datauser_store = [
         'class_id'     => $request->kelas,
         'name'         => $request->name,
         'nisn'         => $request->nisn,
         'alamat'       => $request->alamat,
         'email'        => $request->email,
         'password'     => $request->password,
         'no_handphone' => $request->no_handphone,
      ];

      $datauser_store['photo'] = $request->file('photo')->store('profilesiswa', 'public');
      
      User::create($datauser_store);

      return redirect ('/');
   }

   //fungsi delete
   public function destroy($id){
      //cari user dalam database berdasarkan id yang dikirimkan
      $datauser = User::find($id);

      //lakukan delete pada data tersebut jika data user tersebut ada
      if ($datauser != null){
         Storage::disk('public')->delete($datauser->photo);
         $datauser -> delete();
      }

      //kembalikan user ke halaman beranda
      return redirect ('/');
   }
 }
