<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viewReg extends Model
{
    protected $table = 'registrasi_mhs';

    protected $fillable =['nim','nama','semester','statuskp','judul_kp', 'tahun','nama_lembaga', 'pimpinan','alamat_lembaga', 'no_telpon', 'nidn','judul_kp','penguji','ruang','status_ujian','jadwal_ujian','filereq', 'verifikasi_kp'];
}
