<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Batas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batas', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            //$table->bigIncrements('mahasiswa_nim')->unsigned();
            $table->date('tanggalMulai');
            $table->date('tanggalBerakhir');
            $table->timestamps();
        });
        /*Schema::table('prakp', function (Blueprint $table) {
            $table->foreign('mahasiswa_nim')->references('nim')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dosen_nik')->references('nik')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batas');
    }
}
