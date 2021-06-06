<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    protected $table = 'suratkp';

    protected $fillable =['id_ket','nim','semester','tahun','nama_lembaga','fax_lembaga','email', 'filesurat','verifikasisurat'];
}
