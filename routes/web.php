<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('welcome');
});

//Route::get('dashboard', 'DashboardController@dashboard');

Route::get('/login','AuthController@login');

Route::get('/logout','AuthController@logout');

Route::post('/postlogin','AuthController@postlogin');

//Route::get('mahasiswa', 'MahasiswaController@index');

//Route::get('registrasi', 'MhsRegController@registrasi');

//Route::get('formkp', 'MhsRegController@formkp');

//Route::get('surat', 'MhsSurController@surat');

//Route::get('suratreq', 'MhsSurController@pengajuan');

//Route::get('profile', 'MhsUseController@profile');

//Route::get('dosenbimbing', 'DosenCekController@index');

//Route::get('jadwal', 'DosenCekController@jadwalDsn');

//Route::get('datadosen', 'DosenCekController@profile');

Route::group(['middleware'=>['auth','ceklevel:dosen']], function(){
    route::get('/datadosen','DosenCekController@profile');
    Route::get('/dosenbimbing', 'DosenCekController@index');
    Route::get('/jadwal', 'DosenCekController@jadwalDsn');
});
Route::group(['middleware'=>['auth','ceklevel:mahasiswa']], function(){
    Route::get('/profile', 'MhsUseController@profile');
    Route::get('/registrasi', 'MhsRegController@registrasi');
    Route::get('/formkp', 'MhsRegController@formkp');
    Route::get('/surat', 'MhsSurController@surat');
    Route::get('/suratreq', 'MhsSurController@pengajuan');
    Route::get('/menupra', 'PrakpController@menupr');
    Route::get('/prakp', 'PrakpController@pra');
    Route::post('/registrasi/simpan','MhsRegController@tambah');
    Route::post('/surat/simpan','MhsSurController@tambah');
    Route::post('/prakp/simpan','PrakpController@tambah');
    Route::get('/lihatsur', 'MhsSurController@lihat');
    Route::get('/lihatpra', 'PrakpController@lihat');
    Route::get('/lihatreg', 'MhsRegController@lihat');
});


Route::group(['middleware'=>['auth','ceklevel:admin']], function(){
    Route::get('/dashboard', 'DashboardController@dashboard');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

    