<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gereja extends Model
{
    protected $fillable = ['nama', 'pendeta', 'alamat', 'resort', 'jemaat', 'fax'];

    protected $table = 'gereja';
}
