<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkpenerimaanpensiunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skpenerimaanpensiuns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('kewarnegaraan');
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('dipergunakaan_untuk');
            $table->string('tujuan');
            $table->string('surat_pengantar');
            $table->string('daf_kk');
            $table->string('no_ktp');
            $table->string('nama_bin');
            $table->string('tgl_hari_ini');
            $table->string('nama_pemegang');
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
        Schema::dropIfExists('skpenerimaanpensiuns');
    }
}
