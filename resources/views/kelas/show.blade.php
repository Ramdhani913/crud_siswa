@extends('layouts.app')
@section('title')
<title>Halaman Show Kelas</title>
@endsection
@section('content')
    <h1>Detail Kelas</h1>
    Nama Kelas: <br>
    {{$dataclas->name}}<br>
    <br>
    deskripsi kelas:<br>
    {{$dataclas->description}}<br>
    <br>
    Siswa :<br>
    <table border="1">
        <thead>
            <tr>
                <th>foto</th>
                <th>nama</th>
                <th>nisn</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($datauser as $user)  
            <tr>          
                <td><img src="{{ optional($user)->photo ? asset('storage/'.$user->photo) : '' }}" width="60"></td>      
                <td>{{ optional($user)->name }}</td>
                <td>{{ optional($user)->nisn }}</td>  
            </tr>
         @endforeach
        </tbody>
    </table>
    <a href="/clas"><button>kembali</button></a>
@endsection