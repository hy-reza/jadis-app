<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUspkelahiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uspkelahirans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nik');
            $table->string('nomor_kk');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('nama_anak');
            $table->string('ttl');
            $table->string('kelahiran_ke');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ortu');
            $table->string('alamat_ortu');
            $table->string('tgl_hari_ini');
            $table->string('nama_kades');
            $table->string('nama_pernyataan');
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
        Schema::dropIfExists('uspkelahirans');
    }
}
