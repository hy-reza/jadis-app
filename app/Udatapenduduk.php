<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Udatapenduduk extends Model
{
  protected $fillable = ['nik','nama','jenis_kelamin','tempat_ttl','tgl_lahir','agama','status','pendidikan_terakhir','pekerjaan'];
}
