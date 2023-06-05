<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpcerairujuk1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spcerairujuk1s', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama');
          $table->string('umur');
          $table->string('pekerjaan');
          $table->string('alamat');
          $table->string('nama_sah');
          $table->string('umur_sah');
          $table->string('pekerjaan_sah');
          $table->string('alamat_sah');
          $table->string('lama_tahun');
          $table->string('lama_bulan');
          $table->string('tgl_hari_ini');
          $table->string('nama_pelapor');
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
        Schema::dropIfExists('spcerairujuk1s');
    }
}
