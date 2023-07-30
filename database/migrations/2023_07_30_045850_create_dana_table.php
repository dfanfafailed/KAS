<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dana', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kas');
            $table->unsignedBigInteger('id_siswa');
            $table->integer('dana_masuk');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('id_kas')->references('id')->on('kas');
            $table->foreign('id_siswa')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dana');
    }
};
