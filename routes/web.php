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
    route::get('/datadosen','DosenController@profile');
    Route::get('/dosenbimbing', 'DosenCekController@index');
    Route::get('/jadwalDosen', 'cekJadwalController@jadwalDsn');
});
Route::group(['middleware'=>['auth','ceklevel:mahasiswa']], function(){
    Route::get('/profile', 'MhsUseController@profile');
    Route::get('/registrasi', 'MhsRegController@registrasi');
    Route::get('/formkp', 'MhsRegController@formkp');
    Route::get('/surat', 'MhsSurController@surat');
    Route::get('/suratreq', 'MhsSurController@pengajuan');
    Route::get('/menupra', 'PrakpController@menupr');
    Route::get('/prakp', 'PrakpController@pra');
    Route::get('/profileinfo', 'MhsUseController@profileinfo');
    Route::post('/registrasi/simpan','MhsRegController@tambah');
    Route::post('/surat/simpan','MhsSurController@tambah');
    Route::post('/prakp/simpan','PrakpController@tambah');
    Route::post('/profile/simpan', 'MhsUseController@tambah');
    Route::get('/lihatsur', 'MhsSurController@lihat');
    Route::get('/lihatpra', 'PrakpController@lihat');
    Route::get('/lihatreg', 'MhsRegController@lihat');
});


Route::group(['middleware'=>['auth','ceklevel:admin']], function(){
    Route::get('/dashboard', 'DashboardController@dashboard');
    //Route::get('/verifikasikp', 'VerKpController@menuverKP');
    Route::get('/verifikasiprakp', 'VerPraController@menuverpra');
    Route::get('/verifikasisurkp', 'VerSurController@menuversur');
    Route::get('/menujadwal', 'JadwalController@menujadwal');
    Route::get('/formjadwal', 'JadwalController@registrasi');
    Route::get('/lihatverkp', 'VerKpController@lihat');
    //Route::get('/batas', 'BatasController@menu');
    Route::get('/batas/form', 'BatasController@form');
    Route::post('/batas/simpan', 'BatasController@tambah');
    Route::get('/batas', 'BatasController@lihat');
    Route::get('/batas/hapus/{id}', 'BatasController@delete');
    Route::get('/jadwal/form', 'JadwalController@form');
    Route::post('/jadwal/simpan', 'JadwalController@tambah');
    Route::get('/jadwal', 'JadwalController@lihat');
    Route::get('/jadwal/hapus/{id}', 'JadwalController@delete');
    Route::get('/profileKo', 'DirectController@profile');
    Route::get('/profileinfoKo', 'DirectController@profileinfo');
    Route::post('/profileKo/simpan', 'DirectController@tambah');
    Route::post('/lihatverkp/update/{id}', 'VerKpController@update');
    Route::get('/lihatverkp/edit/{id}', 'VerKpController@edit');
    Route::post('/verifikasiprakp/update/{id}', 'VerPraController@update');
    Route::get('/verifikasiprakp/edit/{id}', 'VerPraController@edit');
    Route::post('/verifikasisurkp/update/{id}', 'VerSurController@update');
    Route::get('/verifikasisurkp/edit/{id}', 'VerSurController@edit');
    Route::get('/batas/edit/{id}', 'BatasController@edit');
    Route::post('/batas/update/{id}', 'BatasController@update');
    Route::get('/jadwal/edit/{id}', 'JadwalController@edit');
    Route::post('/jadwal/update/{id}', 'JadwalController@update');


    




});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

    