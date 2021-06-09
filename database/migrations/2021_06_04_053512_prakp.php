<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prakp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prakp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mahasiswa_id')->unsigned()->index()->nullable();;
            $table->string('nama');
            $table->string('tahun');
            $table->string('semester');
            $table->string('lembaga');
            $table->string('pimpinan');
            $table->string('alamat');
            $table->string('no_telpon');
            $table->string('filepra');
            $table->string('spesifikasi');
            $table->string('tools');
            $table->integer('dosen_id')->unsigned();
            $table->string('penguji');
            $table->string('ruangan');
            $table->string('verifikasipra');
            $table->timestamps();
        });
        Schema::table('prakp', function (Blueprint $table) {
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->foreign('dosen_id')->references('id')->on('dosen');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prakp');
    }
}
