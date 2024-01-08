<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sikampus\MahasiswaController;
use App\Http\Controllers\Sikampus\DosenController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'sikampus'], function(){
    Route::get('/index', [MahasiswaController::class, 'index']);
    Route::get('/create', [MahasiswaController::class, 'create']);
    Route::post('/store', [MahasiswaController::class, 'store']);
    Route::get('/{{id}}/edit', [MahasiswaController::class, 'edit']);
    Route::put('/{id}', [MahasiswaController::class, 'update']);
    Route::post('/save-mahasiswa',[MahasiswaController::class,  'saveMahasiswa']);
    Route::delete('/{id}', [MahasiswaController::class, 'destroy']);

});
Route::group(['prefix' => 'dosen'], function(){
    Route::get('/index', [DosenController::class, 'index']);
    Route::post('/save-dosen',[DosenController::class,  'saveDosen']);
    Route::delete('/delete', [DosenController::class, 'deleteDosen']);

});
