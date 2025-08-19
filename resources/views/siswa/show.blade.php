@extends('layouts.app')
@section('title')
<title>Halaman show Siswa</title>
@endsection
@section('content')
    <h1>Detail Siswa</h1>
    <!-- foto profile -->
    <img src="{{asset('storage/'.$datauser->photo)}}" width="60">

    <!-- nama -->
     <h6>Nama: {{$datauser->name}}</h6>
    
    <!-- nisn -->
    <h6>NISN: {{$datauser->nisn}}</h6>

    <!-- kelas -->
     <h6>Kelas: {{$datauser->clases->name}}</h6>

    <!-- alamat -->
     <h6>Alamat: {{$datauser->alamat}}</h6>
    
     <!-- email -->
     <h6>Email: {{$datauser->email}}</h6>

    <!-- nomor hp -->
    <h6>Nomor Telepon: {{$datauser->no_handphone}}</h6>

    <a href="/"><button>kembali</button></a>
@endsection