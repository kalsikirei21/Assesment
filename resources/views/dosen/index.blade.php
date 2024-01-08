<!DOCTYPE html>
<html lang="en">
<head>
    {{-- @include('layouts.header') --}}
</head>
<body>
    <h2>Data Dosen</h2>
    <br>

    @if (session('status'))
        <h4>{{session('status')}}</h4>
    @endif

    <br>
    <form name="dosen-save-form" id="dosen-save-form" action="{{url('/dosen/save-dosen')}}" method="post">
        @csrf
        <table>
            <tr>
                <td>Dosen ID</td>
                <td>:</td>
                <td><input type="text" name="id_dosen" id="dosen-id" readonly></td>
            </tr>
            <tr>
                <td>Dosen Name</td>
                <td>:</td>
                <td><input type="text" name="nama_dosen" id="nama_dosen"></td>

            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Save</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <table>
        <tr>
            <th>No.</th>
            <th>Dosen ID</th>
            <th>Nama Dosen</th>
            <th colspan="2">Action</th>
        </tr>
        @php($num = 1)
        @foreach ($data as $b)
        <tr class="row-data">
            <td>{{ $num++ }}</td>
            <td>{{ $b['id_dosen'] }}</td>
            <td>{{ $b['nama_dosen'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
