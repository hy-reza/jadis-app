<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpkematiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spkematians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nik');
            $table->string('nomor_kk');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('status_hubungan_keluarga');
            $table->string('nama_meninggal');
            $table->string('nik_meninggal');
            $table->string('nomor_kk_meninggal');
            $table->string('ttl_meninggal');
            $table->string('alamat_meninggal');
            $table->string('tanggal_meninggal');
            $table->string('pukul_meninggal');
            $table->string('dialamat_meninggal');
            $table->string('tgl_hari_ini');
            $table->string('nama_pernyataan');
            $table->string('nama_rt');
            $table->string('nama_kades');
            $table->string('nama_rw');
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
        Schema::dropIfExists('spkematians');
    }
}
