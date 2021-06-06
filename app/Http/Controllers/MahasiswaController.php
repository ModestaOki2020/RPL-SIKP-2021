<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mhsModel;

class MahasiswaController extends Controller
{
    public function index()
    {
        $title ='Mahasiswa';
        $data = mhsModel::all();
        return view('admin.mahasiswa.index', compact('title', 'data'));
    }
}
