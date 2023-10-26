<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'tb_siswa';
    protected $fillable = ['NIS', 'NAMA_LENGKAP', 'KELAS', 'JURUSAN'];
}

