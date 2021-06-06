<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dsnModel;
class DosenController extends Controller
{
    public function index()
    {
        $title ='Dosen';
        $data = dsnModel::all();
        return view('admin.dosen.index', compact('title', 'data'));
    }
}
