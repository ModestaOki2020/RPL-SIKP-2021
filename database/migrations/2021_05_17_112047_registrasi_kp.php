<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistrasiKp extends Migration
{
   
    public function up()
    {
        Schema::create('registrasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('registrasi_id')->unsigned()->index()->nullable();;
            $table->string('nama');
            $table->string('semester');
            $table->string('jenis_kelamin');
            $table->string('tahun_pengajuan');
            $table->string('nama_lembaga');
            $table->string('pimpinan');
            $table->string('alamat_lembaga');
            $table->integer('no_telpon');
            $table->string('judul_kp');
            $table->string('penguji');
            $table->integer('ruangan');
            $table->string('status_ujian');
            $table->string('jadwal_ujian');
            $table->string('file');
            $table->string('verifikasi');
            $table->timestamps();
        });
        Schema::table('registrasi', function (Blueprint $table) {
            $table->foreign('registrasi_id')->references('id')->on('mahasiswa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrasi');
    }
}
