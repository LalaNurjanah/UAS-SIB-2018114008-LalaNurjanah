<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
protected $table = 'absen';
protected $fillable = ['id','waktu_absen','mahasiswa_id','matakuliah_id','keterangan'];


}
