<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viewPra extends Model
{
    protected $table = 'praregkp';
    protected $fillable =['nim','nama','tahun','semester', 'status_pra','nama_lembaga', 'alamat', 'pimpinan','no_telpon', 'filereq', 'spesifikasi','tools','nidn','penguji','ruang','verifikasi_pra'];
}
