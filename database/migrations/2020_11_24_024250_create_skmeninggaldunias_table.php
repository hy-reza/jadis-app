<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkmeninggalduniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skmeninggaldunias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hari');
            $table->string('tanggal');
            $table->string('jam');
            $table->string('nama_alm');
            $table->string('umur_alm');
            $table->string('rt');
            $table->string('rw');
            $table->string('penyebab_meninggal');
            $table->string('nama_saudara');
            $table->string('tempat_bekerja');
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
        Schema::dropIfExists('skmeninggaldunias');
    }
}
