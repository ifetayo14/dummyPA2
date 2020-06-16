<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    
    protected $fillable = ['nama_gereja','bulan','pemasukan','pengeluaran','total'];
}
