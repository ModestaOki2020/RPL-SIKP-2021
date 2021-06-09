<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viewBim extends Model
{
    protected $table = 'view_lock';
    protected $fillable =['nim','nama','jamMulai','jamSelesai','judul_kp','nama_lembaga', 'pimpinan', 'alamat_lembaga', 'tools','filereq', 'spesifikasi','nidn','nama_dosen','ruang'];
}
