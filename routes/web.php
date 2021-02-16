<?php
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\Kontrak_matakuliahController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\SemesterController;
use Illuminate\Support\Facades\Route;

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
    return view('pembuka');
});
Route::resources([
    'mahasiswa'=>MahasiswaController::class,
    'absen'=>AbsenController::class,
    'matakuliah'=>MatakuliahController::class,
    'kontrak_matakuliah'=>Kontrak_matakuliahController::class,
    'jadwal'=>JadwalController::class,
    'semester'=>SemesterController::class,

    ]);
