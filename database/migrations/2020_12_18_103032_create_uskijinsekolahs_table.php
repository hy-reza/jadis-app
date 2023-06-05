<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUskijinsekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uskijinsekolahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->string('kelas');
            $table->string('nama_sekolah');
            $table->string('nomer_kemerdekaan');
            $table->string('tahun_kemerdekaan');
            $table->string('hari');
            $table->string('tgl');
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
        Schema::dropIfExists('uskijinsekolahs');
    }
}
