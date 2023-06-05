<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uspahliwaris extends Model
{
  protected $fillable = ['nomer_surat','nama_alm','nomer_akte_kematian','hari','tanggal','bulan','tahun','status_suami_istri','nama_suami_istri','nama_anak','umur_anak','pekerjaan_anak','alamat_anak','no_req','tgl_hari_ini','nama_camat','nama_kades'];
}
