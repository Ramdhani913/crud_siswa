<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show siswa</title>
</head>
<body>
    <h1>Detail Siswa</h1>
    <!-- foto profile -->
    <img src="{{asset('storage/'.$datauser->photo)}}" width="60">

    <!-- nama -->
     <h6>{{$datauser->name}}</h6>
    
    <!-- nisn -->
    <h6>{{$datauser->nisn}}</h6>

    <!-- kelas -->
     <h6>{{$datauser->clases->name}}</h6>

    <!-- alamat -->
     <h6>{{$datauser->alamat}}</h6>
    
     <!-- email -->
     <h6>{{$datauser->email}}</h6>

    <!-- nomor hp -->
    <h6>{{$datauser->no_handphone}}</h6>

    <a href="/"><button>kembali</button></a>
</body>
</html>