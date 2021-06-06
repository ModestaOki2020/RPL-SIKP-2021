<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verresgis extends Model
{
    protected $table = 'prakp';
    protected $primaryKey = "id";
    protected $fillable =['nim','nama','tahun','semester', 'lembaga', 'alamat', 'pimpinan','no_telpon', 'filepra', 'spesifikasi','tools','nik','penguji','ruangan','verifikasipra'];
}
