<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skumum extends Model
{
    protected $fillable = ['nama','nik','jenis_kelamin','tempat_ttl','agama','pekerjaan','alamat'];
}
