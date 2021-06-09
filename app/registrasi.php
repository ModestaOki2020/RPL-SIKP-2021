<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrasi extends Model
{
    protected $table = 'registrasi';

    protected $fillable =['nim','nama','semester','statuskp','judul_kp', 'tahun','nama_lembaga', 'pimpinan','alamat_lembaga', 'no_telpon', 'nidn','judul_kp','penguji','ruang','status_ujian','jadwal_ujian','filereq', 'verifikasi_kp'];
}
