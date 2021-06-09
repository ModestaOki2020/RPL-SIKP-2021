<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dsnModel extends Model
{
    protected $table = 'dosen';
    protected $fillable =['nidn','nama'];
}
