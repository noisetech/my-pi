<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Krs extends Model
{
    use SoftDeletes;

    protected $table = 'krs';

    protected $fillable = [
        'mahasiswa_id', 'mata_kuliah_id', 'dosen_id', 'sks', 'hari_id', 'tahun_id', 'jam_mulai', 'jam_selsai', 'ketersediaan'
    ];
}
