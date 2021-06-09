<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mhsModel;

class MhsUseController extends Controller
{
    public function profile()
    {
        $title ='Profile';
        $job ='Mahasiswa';
        $mh=DB::table('mahasiswa')->get('nim');
    
        return view('adminMhs.user', compact('title', 'job'), ['mh'=>$mh]);
    }
    public function profileinfo()
    {
        $title ='Profile';
        $mh=DB::table('mahasiswa')->get('nim');
        return view('adminMhs.info', compact('title'), ['mh'=>$mh]);
    }

    public function tambah(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
        ]);
        return redirect('/profile');
    }
}
