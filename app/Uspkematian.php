<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uspkematian extends Model
{
  protected $fillable = ['nama','nik','nomor_kk','jenis_kelamin','pekerjaan','alamat','status_hubungan_keluarga','nama_meninggal','nik_meninggal','nomor_kk_meninggal','ttl_meninggal','alamat_meninggal','tanggal_meninggal','pukul_meninggal','dialamat_meninggal','tgl_hari_ini','nama_pernyataan','nama_rt','nama_kades','nama_rw'];
}
