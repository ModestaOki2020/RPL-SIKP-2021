<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\batas;

class BatasController extends Controller
{
    // public function menu()
    // {
        
    //     return view('admin.mahasiswa.form.menu.menuBatas', compact('title'));
    // }
    public function form()
    {
        $title ='Batas Pengumpulan';
        return view('admin.mahasiswa.form.batasadd', compact('title'));
    }
    public function tambah(Request $request)
    {
        DB::table('batas')->insert([
            'tglMulai' => $request->tglMulai,
            'tglSelesai' => $request->tglSelesai,
        
        ]);
        return redirect('/batas');
    }
    public function lihat()
    {
        $title ='Daftar Batas';
        $dr=DB::table('batas')->get();
        return view('admin.mahasiswa.form.batasread', compact('title'), ['dr'=>$dr]);
    }
    public function edit($id)
    {
        $title ='Daftar Batas';
        $ml = DB::table('batas')->where('id_jadwal', $id)->get();
        return view('admin.mahasiswa.form.editBatas', compact('title'), ['ml'=>$ml]);
    }
    public function update(Request $request)
    {
        DB::table('batas')->where('id_jadwal',$request->id)->update([
            'tglMulai' => $request->tglMulai,
            'tglSelesai' => $request->tglSelesai
        ]);
        return redirect('/batas');
    }
    public function delete($id){
        DB::table('batas')->where('id_jadwal',$id)->delete();
        return redirect('/batas');
    }
}
