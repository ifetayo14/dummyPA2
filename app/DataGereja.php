<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataGereja extends Model
{
    protected $fillable = ['nama_gereja','alamat','no_tlp','email','jlh_jemaat'];
}
