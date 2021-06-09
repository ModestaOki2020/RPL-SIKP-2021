<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    protected $table = 'suratkp';

    protected $fillable =['nim','semester','tahun','nama_lembaga','pimpinan','fax_lembaga','no_telpon','email', 'filesurat','verifikasisurat'];
}
