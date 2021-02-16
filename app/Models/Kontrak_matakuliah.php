<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontrak_matakuliah extends Model
{

    protected $table = 'kontrak_matakuliah';
    protected $fillable = ['mahasiswa_id', 'semester_id'];

}
