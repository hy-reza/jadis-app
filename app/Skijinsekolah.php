<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skijinsekolah extends Model
{
  protected $fillable = ['nama_lengkap','kelas','nama_sekolah','nomer_kemerdekaan','tahun_kemerdekaan','hari','tgl','tgl_hari_ini','nama_kades'];
}
