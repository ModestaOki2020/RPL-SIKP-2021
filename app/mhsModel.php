<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mhsModel extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable =['nim','nama','level','email', 'password'];
}
