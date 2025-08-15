<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ClasController;

class ClasController extends Controller
{
    public function index() {

      $clases = Clas::all();

      return view('kelas.index', compact('clases'));
   }

   public function create() {
      return view('kelas.create');
   }

   public function store (Request $request) {

      $request -> validate([
         'name'        => 'required | unique:clases,name',
         'description' => 'required',
      ]);

      $dataclas_store = [
         'name'         => $request->name,
         'description'  => $request->description,
      ];
      
      Clas::create($dataclas_store);

      return redirect ('/clas');
   }

   //fungsi delete
   public function destroy($id){
      //cari user dalam database berdasarkan id yang dikirimkan
      $dataclas = Clas::find($id);

      //lakukan delete pada data tersebut jika data user tersebut ada
      if ($dataclas != null){
         $dataclas -> delete();
      }

      //kembalikan user ke halaman beranda
      return redirect ('/clas');
   }

   public function show($id){
      //cari data siswa dalam tabel user berdasarkan id yang dikirimkan
      $dataclas = Clas::find($id);
      $datauser = User::where('class_id', $id)->get();

      //cek apakah datanya ada atau tidak
      if ($dataclas == null){
      return redirect ('/clas');
      }

      //pindahkan user ke halaman detail siswa djengan mengirim
      return view ('kelas.show',  compact('dataclas', 'datauser'));
   }

    public function edit ($id){

        $dataclas = Clas::find($id);

      if ($dataclas == null){
        return redirect ('/clas');
      }

      return view ('kelas.edit', compact('dataclas'));
   }

    public function update(Request $request, $id){

    $request -> validate([
         'name'        => 'required | unique:clases,name',
         'description' => 'required',
      ]);

       $dataclas = Clas::find($id);

      $dataclas_update = [
         'name'         => $request->name,
         'description'  => $request->description,
      ];

      $dataclas->update($dataclas_update);

      return redirect('/clas');
   }
}
