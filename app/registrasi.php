<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrasi extends Model
{
    protected $table = 'registrasi';

    protected $fillable =['nim','nama','semester','jenis_kelamin', 'tahun_pengajuan','nama_lembaga', 'pimpinan','alamat_lembaga', 'no_telpon', 'nik','judul_kp','penguji','ruang','status_ujian','jadwal_ujian','file', 'verifikasi'];
}
