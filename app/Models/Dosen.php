<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_dosen';

    protected $table    = "dosen";
    protected $fillable = [
        'id_dosen',
        'nama_dosen',
        'alamat_dosen'

    ];
}
