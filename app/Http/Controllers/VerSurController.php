<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\surat;

class VerSurController extends Controller
{
    public function menuversur()
    {
        $title ='Verifikasi Surat';
        $tp=DB::table('suratkp')->get();
        return view('admin.mahasiswa.suratkpver', compact('title'), ['tp'=>$tp]);
    }
    public function edit($id)
    {
        $title ='Surat KP';
        $sr = DB::table('suratkp')->where('id_ket', $id)->get();
        return view('admin.mahasiswa.form.versuratkp', compact('title'), ['sr'=>$sr]);
    }
    public function update(Request $request)
    {
        DB::table('suratkp')->where('id_ket',$request->id)->update([
            'nim' => $request->nim,
            'tahun' => $request->tahun,
            'semester' => $request->semester,
            'nama_lembaga' => $request->nama_lembaga,
            'alamat' => $request->alamat,
            'pimpinan' => $request->pimpinan,
            'no_telpon' => $request->no_telpon,
            'fax_lembaga' => $request->fax_lembaga,
            'email' => $request->email,
            'filesurat' => $request->filesurat,
            'verifikasi_surat' => $request->verifikasi_surat   
        ]);
   
    return redirect('/verifikasisurkp');
    }
}
