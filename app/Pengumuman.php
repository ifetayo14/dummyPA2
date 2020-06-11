<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $fillable = ['judul', 'isi'];

    protected $table = 'pengumuman';
}
