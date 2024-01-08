<?php

namespace App\Http\Controllers\Sikampus;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class DosenController extends Controller
{
    public static function getDosen(){

        try {
            $model = new Dosen();
            $data = $model->select(
                'id_dosen',
                'nama_dosen'
            )->get()->toArray();

            return $data;
        } catch(Exception $e){
            return $e;
        }
    }

    public function index () {
        $model = new Dosen();
        $data = $model->select(
            'id_dosen',
            'nama_dosen',
        )->get()->toArray();

        $dataDosen = DosenController::getDosen();

        return view('dosen/index', compact('data'));
    }

    public function saveDosen(Request $request){
        $post = $request->post();
        $body['id_dosen'] = Uuid::uuid4();
        $body['nama_dosen'] = $post['nama_dosen'];

        try{
            $model = new Dosen();
            $model->create($body);
            return redirect('dosen/index')->with('status', 'Sukses');
        }catch(Exception $e){
            return redirect('dosen/index')->with('status', 'Gagal');
        }
    }
}
