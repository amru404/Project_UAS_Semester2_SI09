<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();            
            $table->string('kode');
            $table->dateTime('wktu_transaksi');
            $table->string('status');
            $table->unsignedBigInteger('pesanan_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('pesanan_id')->references('id')->on('pesanans');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('transaksis');
    }
}
