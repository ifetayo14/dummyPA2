<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexAdmin(){
        return view('indexAdministrator');
    }

    public function indexPersonalia(){
        return view('personalia.indexPersonalia');
    }

    public function indexPendeta(){
        return view('pendeta.indexPendeta');
    }
}
