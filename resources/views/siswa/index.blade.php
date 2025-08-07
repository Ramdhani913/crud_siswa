<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Beranda</h1>
    <p>List Data Siswa</p>
    <table border="1">
        <thead>
            <tr>
                <th>photo</th>
                <th>nama</th>
                <th>NISN</th>
                <th>kelas</th>
                <th>alamat</th>
                <th>option</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($siswas as $siswa)    
            <tr>                
                <td><img src="{{ asset('storage/'.$siswa->photo) }}" width="60"></td>
                <td>{{$siswa->name}}</td>
                <td>{{$siswa->nisn}}</td>
                <td>{{$siswa->clases->name}}</td>
                <td>{{$siswa->alamat}}</td>
                <td>
                    <a href="">detail</a>|
                    <a href="">edit</a>|
                    <a href="/siswa/delete/{{ $siswa->id }}">hapus</a>|
                </td>   
            </tr>
         @endforeach
        </tbody>
    </table>
    <br>
    <a href="/siswa/create"><button>Tambah Data Siswa</button></a>
</body>
</html>