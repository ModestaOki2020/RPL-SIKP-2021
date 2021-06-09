<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\verresgis;

class PrakpController extends Controller
{
    public function pra()
    {
        $title ='Pengajuan Pra KP';
        return view('adminMhs.Registrasi.prakp', compact('title'));
    }
    public function menupr()
    {
        return view('adminMhs.Registrasi.menupra', compact('title'));
    }
    public function tambah(Request $request)
    {
        DB::table('prakp')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tahun' => $request->tahun,
            'semester' => $request->semester,
            'nama_lembaga' => $request->nama_lembaga,
            'status_pra' => $request->status_pra="Belum terverifikasi",
            'pimpinan' => $request->pimpinan,
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'filereq' => $request->filereq,
            'tools' => $request->tools,
            'nidn' => $request->nidn="721600000",
            'penguji' => $request->penguji="-",
            'ruang' => $request->ruang="-",
            'spesifikasi' => $request->spesifikasi,
            'verifikasi_pra'=>$request->verifikasi_pra="belum terverifikasi"
        
        ]);
        return redirect('/menupra');
    }
    public function lihat()
    {
        $title ='Daftar Pra Registrasi KP';
        $pa=DB::table('prakp')->get();
        return view('adminMhs.Registrasi.lihat.lihatpra', compact('title'), ['pa'=>$pa]);
    }
}
