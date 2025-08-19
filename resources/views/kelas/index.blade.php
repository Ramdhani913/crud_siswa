@extends('layouts.app')
@section('title')
<title>Halaman Index Kelas</title>
@endsection
@section('content')
    <h1>Beranda</h1>
    <p>List Data Kelas</p>
    <table border="1">
        <thead>
            <tr>
                <th>nama</th>
                <th>deskripsi</th>
                <th>option</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($clases as $clas)    
            <tr>                
                <td>{{$clas->name}}</td>
                <td>{{$clas->description}}</td>
                <td>
                    <a href="/clas/show/{{$clas->id}}">detail</a>|
                    <a href="/clas/edit/{{$clas->id}}">edit</a>|
                    <a href="/clas/delete/{{$clas->id}}" onclick="return confirm('yakin deck?')">hapus</a>|
                </td>   
            </tr>
         @endforeach
        </tbody>
    </table>
    <br>
    <a href="/clas/create"><button>Tambah Data Kelas</button></a>
@endsection