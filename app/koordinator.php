<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class koordinator extends Model
{
    protected $table = 'koordinator';
    protected $fillable =['nidn','nama'];
}
