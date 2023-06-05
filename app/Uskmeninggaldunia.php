<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uskmeninggaldunia extends Model
{
  protected $fillable = ['nomer_surat','hari','tanggal','jam','nama_alm','umur_alm','rt','rw','penyebab_meninggal','nama_saudara','tempat_bekerja','tgl_hari_ini','nama_kades'];
}
