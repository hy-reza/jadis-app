<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uspkelahiran extends Model
{
  protected $fillable = ['nama','nik','nomor_kk','jenis_kelamin','pekerjaan','alamat','nama_anak','ttl','kelahiran_ke','nama_ayah','nama_ibu','pekerjaan_ortu','alamat_ortu','tgl_hari_ini','nama_kades','nama_pernyataan'];
}
