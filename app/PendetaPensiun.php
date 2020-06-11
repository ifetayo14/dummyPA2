<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendetaPensiun extends Model
{
    protected $fillable = ['name', 'birthPlace', 'birthDate', 'gender', 'dutyBegin', 'dutyEnd', 'address', 'email', 'phoneNumber'];

    protected $table = 'pendeta_pensiuns';
}
