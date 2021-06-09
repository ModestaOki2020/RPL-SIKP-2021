<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\viewReg;
class DosenCekController extends Controller
{
    public function index()
    {
        $title ='Daftar Bimbingan';
        $data = DB::table('view_lock')->get();
        return view('admindosen.jadwal.lihatdaftarbim', compact('title'),['data'=>$data]);
    }
    
}
