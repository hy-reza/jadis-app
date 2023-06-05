<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkjualbelitanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skjualbelitanahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->string('ttl');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('nama_lengkap_1');
            $table->string('ttl_1');
            $table->string('agama_1');
            $table->string('pekerjaan_1');
            $table->string('alamat_1');
            $table->string('panjang');
            $table->string('lebar');
            $table->string('utara');
            $table->string('selatan');
            $table->string('timur');
            $table->string('barat');
            $table->string('nilai');
            $table->string('terbilang');
            $table->string('kontan');
            $table->string('tgl_hari_ini');
            $table->string('nama_pihak_1');
            $table->string('nama_pihak_2');
            $table->string('nama_kades');
            $table->string('saksi_1');
            $table->string('saksi_2');
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
        Schema::dropIfExists('skjualbelitanahs');
    }
}
