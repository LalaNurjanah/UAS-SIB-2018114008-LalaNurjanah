<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'data mahasiswa';
    protected $fillable = ['nama_mahasiswa', 'alamat','no_telp','email'];
}
