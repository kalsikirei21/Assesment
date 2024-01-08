<h1>Edit Mahasiswa</h1>

<form action="sikampus/{{$mahasiswa->id}}" method="POST">
@method('put')
    @csrf
    <input type="text" name="nama" placeholder="Nama" value="{{$mahasiswa->nama}}"><br>
    <input type="text" name="nim" placeholder="NIM" value="{{$mahasiswa->nim}}"><br>
    <input type="text" name="jurusan" placeholder="Jurusan" value="{{$mahasiswa->jurusan}}"><br>
    <textarea name="alamat" rows="10" value="{{$mahasiswa->alamat}}"></textarea><br>
    <input type="submit" name="submit" value="Save" >

</form>
