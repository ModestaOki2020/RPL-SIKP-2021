<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\verresgis;

class VerPraController extends Controller
{
    public function menuverpra()
    {
        $title ='Pengajuan Pra KP';
        $op=DB::table('prakp')->get();
        return view('admin.mahasiswa.verifikasipra', compact('title'), ['op'=>$op]);
    }
    public function edit($id)
    {
        $title ='Pengajuan KP';
        $kr = DB::table('prakp')->where('id_pra', $id)->get();
        return view('admin.mahasiswa.form.verprakp', compact('title'), ['kr'=>$kr]);
    }
    public function update(Request $request)
    {
        
        DB::table('prakp')->where('id_pra',$request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tahun' => $request->tahun,
            'semester' => $request->semester,
            'nama_lembaga' => $request->nama_lembaga,
            'status_pra' => $request->status_pra,
            'pimpinan' => $request->pimpinan,
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'filereq' => $request->filereq,
            'tools' => $request->tools,
            'nidn' => $request->nidn,
            'penguji' => $request->penguji,
            'ruang' => $request->ruang,
            'spesifikasi' => $request->spesifikasi,
            'verifikasi_pra'=>$request->verifikasi_pra
        ]);
        return redirect('/verifikasiprakp');
    }
}
