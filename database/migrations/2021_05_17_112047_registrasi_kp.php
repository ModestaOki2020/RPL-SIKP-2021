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
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->string('semester');
            $table->string('jenis_kelamin');
            $table->string('tahun_pengajuan');
            $table->string('nama_lembaga');
            $table->string('alamat_lembaga');
            $table->integer('no_telpon');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        
    }
}
