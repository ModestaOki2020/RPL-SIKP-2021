<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batas extends Model
{
    protected $table = 'batas';

    protected $fillable =['tglMulai','tglSelesai'];
}
