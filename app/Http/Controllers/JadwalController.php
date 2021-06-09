<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\jadwal;

class JadwalController extends Controller
{
    public function form()
    {
        $title ='Jadwal';
        return view('admin.mahasiswa.form.tambahJadwal', compact('title'));
    }
    public function tambah(Request $request)
    {
        DB::table('jadwal')->insert([
            'tglMulai' => $request->tglMulai,
            'tglSelesai' => $request->tglSelesai,
            'nidn' => $request->nidn,
            'ruang' => $request->ruang,
            'jamMulai' => $request->jamMulai,
            'jamSelesai' => $request->jamSelesai
        
        ]);
        return redirect('/jadwal');
    }
    public function lihat()
    {
        $title ='Daftar Jadwal';
        $dq=DB::table('jadwal')->get();
        return view('admin.mahasiswa.form.jadwalread', compact('title'), ['dq'=>$dq]);
    }
    public function delete($id){
        DB::table('jadwal')->where('id_jadwal',$id)->delete();
        return redirect('/jadwal');
    }
    public function edit($id)
    {
        $title ='Daftar Jadwal';
        $ml = DB::table('jadwal')->where('id_jadwal', $id)->get();
        return view('admin.mahasiswa.form.editJadwal', compact('title'), ['ml'=>$ml]);
    }
    public function update(Request $request)
    {
        DB::table('jadwal')->where('id_jadwal',$request->id)->update([
            'tglMulai' => $request->tglMulai,
            'tglSelesai' => $request->tglSelesai,
            'nidn' => $request->nidn,
            'ruang' => $request->ruang,
            'jamMulai' => $request->jamMulai,
            'jamSelesai' => $request->jamSelesai
        ]);
        return redirect('/batas');
    }

}
