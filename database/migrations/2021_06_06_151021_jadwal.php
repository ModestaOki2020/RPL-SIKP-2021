<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->bigIncrements('lihat_id')->unsigned()->index()->nullable();;
            $table->date('tanggalMulai');
            $table->date('tanggalBerakhir');
            $table->bigIncrements('lihat_nik')->unsigned()->index()->nullable();;
            $table->string('ruangan');
            $table->string('jamMulai');
            $table->string('jamSelesai');
            $table->timestamps();
        });
        Schema::table('jadwal', function (Blueprint $table) {
            $table->foreign('lihat_id')->references('id')->on('mahasiswa');
            $table->foreign('lihat_nik')->references('id')->on('dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
