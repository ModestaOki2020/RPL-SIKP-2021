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
            'jenis_kelamin' => $request->jenis_kelamin,
            'tahun_pengajuan' => $request->tahun_pengajuan,
            'nama_lembaga' => $request->nama_lembaga,
            'pimpinan' => $request->pimpinan,
            'alamat_lembaga' => $request->alamat_lembaga,
            'no_telpon' => $request->no_telpon,
            'nik' => $request->nik=" ",
            'judul_kp' => $request->judul_kp,
            'penguji' => $request->penguji=" ",
            'ruang' => $request->ruang=" ",
            'status_ujian' => $request->status_ujian=" ",
            'jadwal_ujian' => $request->jadwal_ujian=" ",
            'file' => $request->file,
            'verifikasi' => $request->verifikasi="belum terverifikasi"
        ]);
        return redirect('/registrasi');
    }
    public function lihat()
    {
        $title ='Daftar Registrasi KP';
        $pr=DB::table('registrasi')->where('nim')->get();
        return view('adminMhs.Registrasi.lihat.lihatkp', compact('title'), ['pr'=>$pr]);
    }
    public function edit($id){
        $pr=DB::table('registrasi')->where('nim', $id)->get();
        return view('adminMhs.Registrasi.edit.editRegistrasi');
    }
    public function update(Request $request){
        
    }

}
