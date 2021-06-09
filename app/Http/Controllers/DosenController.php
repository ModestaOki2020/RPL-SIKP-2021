<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dsnModel;
class DosenController extends Controller
{
    public function profile()
    {
        $title ='Profile';
        $job ='Dosen/Koordinator';
        return view('admindosen.user', compact('title'));
    }
}
