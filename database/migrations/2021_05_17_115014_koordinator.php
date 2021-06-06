<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Koordinator extends Migration
{
   
    public function up()
    {
        Schema::create('koordinator', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nidn')->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
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
