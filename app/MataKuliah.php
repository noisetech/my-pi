<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataKuliah extends Model
{
    use SoftDeletes;

    protected $table = 'mata_kuliah';

    protected $fillable = [
        'kode_mata_kuliah', 'nama_mata_kuliah', 'sks'
    ];
}
