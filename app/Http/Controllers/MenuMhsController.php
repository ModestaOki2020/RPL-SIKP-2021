<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuMhsController extends Controller
{
    public function registrasi()
    {
        $judul ='Registrasi KP';
        return view('adminMhs.crud.menukp', compact('title'));
    }
}
