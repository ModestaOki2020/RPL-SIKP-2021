<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\dsnModel;
class DosenCekController extends Controller
{
    public function index()
    {
        $title ='Dosen';
        //$data = dsnModel::all();
        return view('admindosen.jadwal.lihatdaftarbim', compact('title'));
    }
    public function jadwalDsn()
    {
        $title ='Dosen';
        //$data = dsnModel::all();
        return view('admindosen.jadwal.lihatJadwal', compact('title'));
    }
    public function profile()
    {
        $title ='Profile';
        //$job ='Dosen/Koordinator';
        return view('admindosen.user', compact('title'));
    }


}
