<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUspcerairujuk4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uspcerairujuk4s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('ttl');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('nama_istri');
            $table->string('ttl_istri');
            $table->string('agama_istri');
            $table->string('pekerjaan_istri');
            $table->string('alamat_istri');
            $table->string('nama_wali');
            $table->string('ttl_wali');
            $table->string('agama_wali');
            $table->string('pekerjaan_wali');
            $table->string('alamat_wali');
            $table->string('tgl_pelaksaan');
            $table->string('maskawin');
            $table->string('saksi1');
            $table->string('saksi2');
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
        Schema::dropIfExists('uspcerairujuk4s');
    }
}
