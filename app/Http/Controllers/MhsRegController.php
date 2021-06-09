<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\registrasi;

class MhsRegController extends Controller
{
    
    public function formkp()
    {
        $title ='Registrasi KP';
        return view('adminMhs.Registrasi.kp', compact('title'));
    }
    public function registrasi()
    {
        return view('adminMhs.Registrasi.menukp', compact('title'));
    }
 
    public function tambah(Request $request)
    {

        DB::table('registrasi')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'semester' => $request->semester,
            'statuskp' => $request->status_kp="belum diterima",
            'tahun' => $request->tahun,
            'nama_lembaga' => $request->nama_lembaga,
            'pimpinan' => $request->pimpinan,
            'alamat_lembaga' => $request->alamat_lembaga,
            'no_telpon' => $request->no_telpon,
            'fax_lembaga' => $request->fax_lembaga,
            'nidn' => $request->nidn="721600000",
            'judul_kp' => $request->judul_kp,
            'penguji' => $request->penguji="belum ada penguji",
            'ruang' => $request->ruang="-",
            'tools' => $request->tools,
            'filereq' => $request->filereq,
            'spesifikasi' => $request->spesifikasi,
            'status_ujian' => $request->status_ujian="belum terverifikasi",
            'jadwal_ujian' => $request->jadwal_ujian="belum terjadwal",
            'verifikasi_kp' => $request->verifikasi_kp="belum terverifikasi",

           
        ]);
        return redirect('/registrasi');
    }
    public function lihat()
    {
        $title ='Daftar Registrasi KP';
        $pr=DB::table('registrasi')->get();
        return view('adminMhs.Registrasi.lihat.lihatkp', compact('title'), ['pr'=>$pr]);
    }

}
