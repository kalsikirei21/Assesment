@extends('layouts.master')
@section('content')
<div class="container">
<h1>Create Mahasiswa</h1>
<form action="sikampus/store" method="POST">
@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama</label>
      <input type="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIM</label>
        <input type="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jurusan</label>
        <input type="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
    <textarea class="form-control" name="alamat" rows="10" ></textarea><br>
    <input type="submit" name="submit" value="Save" class="btn btn-primary">

</form>
</body>
</div>
</html>
@endsection
