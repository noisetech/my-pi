<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
    use SoftDeletes;

    protected $table = 'jurusan';

    protected $fillable = [
        'kode_jurusan', 'nama_jurusan'
    ];

    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class, 'jurusan_id', 'id');
    }
}
