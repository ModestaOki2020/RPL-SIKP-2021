<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\koordinator; 

class DirectController extends Controller
{
    public function profile()
    {
        $title ='Profile';
        $job ='ADMIN';
        $ko=DB::table('koordinator')->get('nidn');
    
        return view('admin.user', compact('title', 'job'), ['ko'=>$ko]);
    }
    public function profileinfo()
    {
        $title ='Profile';
        $ko=DB::table('koordinator')->get('nidn');
        return view('admin.info', compact('title'), ['ko'=>$ko]);
    }

    public function tambah(Request $request)
    {
        DB::table('koordinator')->insert([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
        ]);
        return redirect('/profileKo');
    }

}
