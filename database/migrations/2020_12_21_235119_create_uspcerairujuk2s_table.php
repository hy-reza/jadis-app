<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUspcerairujuk2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uspcerairujuk2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nik');
            $table->string('ttl');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('nama_sah');
            $table->string('nik_sah');
            $table->string('ttl_sah');
            $table->string('pekerjaan_sah');
            $table->string('alamat_sah');
            $table->string('suami');
            $table->string('negara');
            $table->string('tgl_hari_ini');
            $table->string('nama_kades');
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
        Schema::dropIfExists('uspcerairujuk2s');
    }
}
