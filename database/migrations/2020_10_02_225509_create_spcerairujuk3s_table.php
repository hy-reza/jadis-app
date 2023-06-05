<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpcerairujuk3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spcerairujuk3s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('nama_angkat');
            $table->string('alamat_angkat');
            $table->string('nama_anak');
            $table->string('jenis_kelamin');
            $table->string('tempat');
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
        Schema::dropIfExists('spcerairujuk3s');
    }
}
