<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mahasiswa extends Migration
{
   
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        //
    }
}
