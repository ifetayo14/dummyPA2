<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexAdmin(){
        $dataPengumuman = Pengumuman::all();
        return view('indexAdministrator', compact('dataPengumuman'));
    }
}
