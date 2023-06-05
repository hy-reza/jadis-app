<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sppindahtempat extends Model
{
    protected $fillable = ['nama','ttl','nik','alamat_asal','desa_kelurahan','kabupaten_kota','provinsi','desa_kelurahan_rt_rw_tujuan','kecamatan','kabupaten_kota_tujuan','provinsi_tujuan','alasan_pindah','nik_1','nama_1','tgl_lahir_1','hubungan_keluarga_1','nik_2','nama_2','tgl_lahir_2','hubungan_keluarga_2','tgl_hari_ini','nama_pemohon'];
}
