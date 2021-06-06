<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\surat;

class MhsSurController extends Controller
{
    public function surat()
    {
        $title ='Pengajuan Surat KP';
        return view('adminMhs.Registrasi.suratkp', compact('title'));
    }
    public function pengajuan()
    {
        return view('adminMhs.Registrasi.menusurat', compact('title'));
    }
    public function lihat()
    {
        $title ='Surat KP';
        $su=DB::table('suratkp')->get();
        return view('adminMhs.Registrasi.lihat.lihatsur', compact('title'), ['su'=>$su]);
    }
    public function tambah(Request $request)
    {
        DB::table('suratkp')->insert([
            'id_ket' => $request->id_ket,
            'nim' => $request->nim,
            'tahun' => $request->tahun,
            'semester' => $request->semester,
            'nama_lembaga' => $request->nama_lembaga,
            'fax_lembaga' => $request->fax_lembaga,
            'email' => $request->email,
            'filesurat' => $request->filesurat,
            'verifikasisurat' => $request->verifikasisurat="belum terverifikasi"
           
    
        ]);
        return redirect('/suratreq');
    }
   
}
