<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nama_lengkap', 'npm', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'alamat', 'gambar', 'nama_orang_tua',
        'no_telpon', 'jurusan_id', 'user_id', 'status_mahasiswa'
    ];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
