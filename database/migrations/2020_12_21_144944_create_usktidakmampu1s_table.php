<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsktidakmampu1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usktidakmampu1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('kewarganegaraan');
            $table->string('agama');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('persyaratan');
            $table->string('tgl_hari_ini');
            $table->string('nama_berkepentingan');
            $table->string('nama_kades');
            $table->string('no');
            $table->string('nama_camat');
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
        Schema::dropIfExists('usktidakmampu1s');
    }
}
