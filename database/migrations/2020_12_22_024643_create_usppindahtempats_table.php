<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsppindahtempatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usppindahtempats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('ttl');
            $table->string('nik');
            $table->string('alamat_asal');
            $table->string('desa/kelurahan');
            $table->string('kabupaten/kota');
            $table->string('provinsi');
            $table->string('desa/kelurahan/rt/rw_tujuan');
            $table->string('kabupaten/kota_tujuan');
            $table->string('provinsi_tujuan');
            $table->string('alasan_pindah');
            $table->string('nik_1');
            $table->string('nama_1');
            $table->string('tgl_lahir_1');
            $table->string('hubungan_keluarga_1');
            $table->string('nik_2');
            $table->string('nama_2');
            $table->string('tgl_lahir_2');
            $table->string('hubungan_keluarga_2');
            $table->string('tgl_hari_ini');
            $table->string('nama_pemohon');
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
        Schema::dropIfExists('usppindahtempats');
    }
}
