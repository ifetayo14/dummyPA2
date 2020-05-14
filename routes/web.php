<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('index');
});

Route::get('/indexAdministrator', 'PagesController@indexAdmin');

Route::get('/dataGereja', function () {
    return view('dataGereja');
});

Route::get('/detailGereja', function () {
    return view('detailGereja');
});

Route::get('/kasMain', function () {
    return view('kasMain');
});

Route::get('/kolekteMain', function () {
    return view('kolekteMain');
});

Route::get('/detailKasGereja', function () {
    return view('detailKasGereja');
});

Route::get('/detailKolekteGereja', function () {
    return view('detailKolekteGereja');
});

Route::get('/pendetaPensiun', function () {
    return view('pendetaPensiun');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/editPengumuman', function () {
    return view('editPengumuman');
});

Route::get('/editPendetaPensiun', function () {
    return view('editPendetaPensiun');
});

Route::get('/detailPendetaPensiun', function () {
    return view('detailPendetaPensiun');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/editDataGereja', function () {
    return view('editDataGereja');
});

Route::get('/addPengumuman', function () {
    return view('addPengumuman');
});

Route::get('/detailPengumuman', function () {
    return view('detailPengumuman');
});

Route::get('/addGereja', function () {
    return view('addGereja');
});

Route::get('/addPendetaAktif', function () {
    return view('addPendetaAktif');
});

Route::get('/addPendetaPensiun', function () {
    return view('addPendetaPensiun');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/editProfile', function () {
    return view('editProfile');
});

//PENDETA AKTIF

Route::get('/pendetaAktif', 'PendetaAktifController@index');

Route::post('penAktif', 'PendetaAktifController@store');

Route::get('/detailPendetaAktif/{pendetaAktif}', 'PendetaAktifController@show');

Route::delete('/detailPendetaAktif/{pendetaAktif}', 'PendetaAktifController@destroy');

Route::get('/editAktif/{pendetaAktif}', 'PendetaAktifController@edit');

Route::patch('/updateAktif/{pendetaAktif}', 'PendetaAktifController@update');
