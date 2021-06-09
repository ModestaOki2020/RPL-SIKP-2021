<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dosen extends Migration
{
  
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nidn');
            $table->string('nama');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('dosen');

    }
}
