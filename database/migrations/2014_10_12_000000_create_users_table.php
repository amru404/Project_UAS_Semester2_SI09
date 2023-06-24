<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('tmp_lahir');
            $table->string('tgl_lahir');
            $table->string('provinsi')->default('-');
            $table->string('kabupaten')->default('-');
            $table->string('kecamatan')->default('-');
            $table->string('kelurahan')->default('-');
            $table->integer('kodepos')->default(0);
            $table->string('img_ktp')->default('-');
            $table->string('img_ktp_selfi')->default('-');
            $table->string('detail_alamat')->default('-');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['pembeli', 'penjual', 'admin'])->default('pembeli');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
