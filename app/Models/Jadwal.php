<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{

    protected $table = 'jadwal';
    protected $fillable = ['id', 'jadwal','matakuliah_id'];

}
