<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skpenerimaanpensiun extends Model
{
  protected $fillable = ['nama_lengkap','jenis_kelamin','ttl','kewarganegaraan','agama','status_perkawinan','pekerjaan','alamat','dipergunakaan_untuk','tujuan','surat_pengantar','daf_kk','no_ktp','nama_bin','tgl_hari_ini','nama_pemegang','nama_kades'];
}
