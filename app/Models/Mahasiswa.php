<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    protected $table = 'mahasiswa';
    protected $fillable = ['nama_mahasiswa', 'alamat','no_telp','email'];

}
