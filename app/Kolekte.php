<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kolekte extends Model
{
    protected $fillable = ['nama_gereja','bulan','minggu','pemasukan'];
}
