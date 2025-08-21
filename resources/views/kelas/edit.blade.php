@extends('layouts.app')
@section('title')
<title>Halaman Edit Kelas</title>
@endsection
@section('content')
    <h1>Halaman Tambah</h1><br>
    

<form action="/clas/update/{{$dataclas->id}}" method="post">
  @csrf  
    <div>
        <label for="name">Nama:</label><br>
        <input type="text" name="name" value="{{$dataclas->name}}"><br>
        @error('name')
        <small style="color: red;">*{{$message}}</small>
        @enderror
    </div><br>
    <div>
        <label for="description">deskripsi:</label><br>
        <input type="text" name="description" value="{{$dataclas->description}}"><br>
        @error('nisn')
        <small style="color: red;">*{{$message}}</small>
        @enderror
    </div><br>
    <button type="submit">simpan</button><br>
    <br>
</form>
<a href="/clas"><button>kembali</button></a>
@endsection