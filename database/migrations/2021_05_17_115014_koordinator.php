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
            $table->integer('nidnkord')->autoIncrement()->index()->nullable();;
            $table->string('nama');
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
        Schema::dropIfExists('koordinator');
    }
}
