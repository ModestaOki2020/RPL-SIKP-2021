<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuratKet extends Migration
{
   
    public function up()
    {
        Schema::create('suratKp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_ket')->unique();
            $table->string('nama_lembaga');
            $table->integer('fax_lembaga');
            $table->string('email');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        //
    }
}
