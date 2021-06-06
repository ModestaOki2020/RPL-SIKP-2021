<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsUseController extends Controller
{
    public function profile()
    {
        $title ='Profile';
        $job ='Mahassiwa';
    
        return view('adminMhs.user', compact('title', 'job'));
    }
}
