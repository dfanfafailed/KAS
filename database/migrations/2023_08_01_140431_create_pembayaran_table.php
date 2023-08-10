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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengeluaran');
            $table->unsignedBigInteger('id_siswa');
            $table->date('tanggal');
            $table->integer('uang_kembali');
            $table->timestamps();

            $table->foreign('id_pengeluaran')->references('id')->on('pengeluaran');
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
        Schema::dropIfExists('pembayaran');
    }
};
