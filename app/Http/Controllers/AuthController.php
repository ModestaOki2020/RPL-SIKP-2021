<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auths.login');
    }
    /*public function postlogin(Request $request){

       if(Auth::attempt($request->only('email','password'))){
           return redirect('/dashboard');
       }
       return redirect('/login');
    }*/
 
    public function postlogin(Request $request)
    {
        /*$rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
 
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
 
        Auth::attempt($data);
 
        if (Auth::check()) { 
            return redirect('/');
 
        } else { 
            Session::flash('error', 'Email atau password salah');
            return redirect('/login');
        }*/
        if(in_array($request->user()->level,$levels)){
            return $next($request);
        }
        return redirect('/');
 
    }
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect('/login');
    }
 
}
