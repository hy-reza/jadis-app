<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUspahliwarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uspahliwaris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_alm');
            $table->string('nomer_akte_kematian');
            $table->string('hari');
            $table->string('tanggal');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('status_suami_istri');
            $table->string('nama_suami_istri');
            $table->string('nama_anak');
            $table->string('umur_anak');
            $table->string('pekerjaan_anak');
            $table->string('alamat_anak');
            $table->string('no_req');
            $table->string('tgl_hari_ini');
            $table->string('nama_camat');
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
        Schema::dropIfExists('uspahliwaris');
    }
}
