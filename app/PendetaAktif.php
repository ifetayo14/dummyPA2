<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendetaAktif extends Model
{
    protected $fillable = ['name', 'birthPlace', 'birthDate', 'dutyBegin', 'gender', 'workPlace', 'address', 'email', 'phoneNumber'];
}
