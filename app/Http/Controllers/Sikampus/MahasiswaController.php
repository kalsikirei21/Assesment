<?php

namespace App\Http\Controllers\Sikampus;

use App\Http\Controllers\Sikampus\DosenController;
use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Exception;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa/index', compact (['mahasiswa']));
    }
    public function create() {
return view('mahasiswa.create');
    }
    public function store(Request $request){
        Mahasiswa::create($request->except(['_token','submit']));
        return redirect('/index');
    }
    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
    public function update($id, Request $request){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->except(['_token','submit']));
        return redirect('/index');
    }
    public function destroy($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/index');
    }
}
