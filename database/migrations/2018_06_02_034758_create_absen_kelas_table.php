<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsenKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_kelas', function (Blueprint $table) {
            $table->increments('id');
               $table->unsignedInteger('absen_id');
            $table->foreign('absen_id')->references('id')->on('absens')->onDelete('CASCADE');
            $table->unsignedInteger('kelas_id');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('CASCADE');
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
        Schema::dropIfExists('absen_kelas');
    }
}
