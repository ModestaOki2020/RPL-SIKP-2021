<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\registrasi;

class VerKpController extends Controller
{
    public function lihat()
    {
        $title ='Pengajuan KP';
        $dp=DB::table('registrasi')->get();
        return view('admin.mahasiswa.verifikasikp', compact('title'), ['dp'=>$dp]);
    }
    public function edit($id)
    {
        $title ='Pengajuan KP';
        $kp = DB::table('registrasi')->where('id_reg', $id)->get();
        return view('admin.mahasiswa.form.verkp', compact('title'), ['kp'=>$kp]);
    }
    public function update(Request $request)
    {
        DB::table('registrasi')->where('id_reg',$request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'semester' => $request->semester,
            'statuskp' => $request->status_kp,
            'tahun' => $request->tahun,
            'nama_lembaga' => $request->nama_lembaga,
            'pimpinan' => $request->pimpinan,
            'alamat_lembaga' => $request->alamat_lembaga,
            'no_telpon' => $request->no_telpon,
            'nidn' => $request->nidn,
            'judul_kp' => $request->judul_kp,
            'penguji' => $request->penguji,
            'ruang' => $request->ruang,
            'status_ujian' => $request->status_ujian,
            'jadwal_ujian' => $request->jadwal_ujian,
            'filereq' => $request->filereq,
            'verifikasi_kp' => $request->verifikasi_kp
        ]);
        return redirect('/lihatverkp');
    }
    
   
}
