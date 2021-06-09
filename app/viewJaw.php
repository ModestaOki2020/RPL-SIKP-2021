<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viewJaw extends Model
{
    protected $table = 'view_jadwal';

    protected $fillable =['tglMulai','tglSelesai','nidn','ruang','jamMulai','jamSelesai'];
}
