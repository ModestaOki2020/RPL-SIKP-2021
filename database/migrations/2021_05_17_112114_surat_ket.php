<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuratKet extends Migration
{
   
    public function up()
    {
        Schema::create('suratKp', function (Blueprint $table) {
            $table->bigIncrements('id_ket');
            $table->integer('mahasiswa_id')->unsigned()->index()->nullable();;
            $table->string('tahun');
            $table->string('semester');
            $table->string('nama_lembaga');
            $table->integer('fax_lembaga');
            $table->string('email');
            $table->string('file');
            $table->string('verifikasi_surat');
            $table->timestamps();
        });
        Schema::table('suratkp', function (Blueprint $table) {
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('suratkp');
    }
}
