<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\jadwal;

class cekJadwalController extends Controller
{
    public function jadwalDsn()
    {
        $title ='Dosen';
        $jw = DB::table('jadwal')->get();
        return view('admindosen.jadwal.lihatJadwal',  compact('title'),['jw'=>$jw]);
    }
}
