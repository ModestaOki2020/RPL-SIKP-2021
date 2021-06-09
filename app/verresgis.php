<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verresgis extends Model
{
    protected $table = 'prakp';
    protected $fillable =['nim','nama','tahun','semester', 'status_pra','nama_lembaga', 'alamat', 'pimpinan','no_telpon', 'filereq', 'spesifikasi','tools','nidn','penguji','ruang','verifikasi_pra'];
}
