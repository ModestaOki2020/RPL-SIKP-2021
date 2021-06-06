<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
    public function mahasiswa()
    {
        return view('adminMhs');
    }
    public function dosen()
    {
        return view('admindosen');
    }

}
