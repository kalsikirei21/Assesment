@extends('layouts.master')

@section('content')
    <div class="container">
    <a href="/sikampus/create" class="btn btn-primary">Add Mahasiswa</a>
<table border="1" class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Nama Mahasiswa</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr>
    @foreach ($mahasiswa as $m)
        <tr>
            <td>{{$m->id}}</td>
            <td>{{$m->nama_mhs}}</td>
            <td>{{$m->nim}}</td>
            <td>{{$m->jurusan}}</td>
            <td>{{$m->alamat}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/sikampus/{{$m->id}}/edit" class="btn btn-info" >Edit</a>
                <form action="/sikampus/{{$m->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger"></div>
                </form>
            </td>
        </tr>
    @endforeach
</table>
    </div>
</body>
</html>
@endsection

