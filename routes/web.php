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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/editProfile', function () {
    return view('editProfile');
});

//PENDETA AKTIF

Route::get('/pendetaAktif', 'PendetaAktifController@index');
Route::get('/addPendetaAktif', 'PendetaAktifController@create');
Route::post('penAktif', 'PendetaAktifController@store');
Route::get('/detailPendetaAktif/{pendetaAktif}', 'PendetaAktifController@show');
Route::delete('/detailPendetaAktif/{pendetaAktif}', 'PendetaAktifController@destroy');
Route::get('/editAktif/{pendetaAktif}', 'PendetaAktifController@edit');
Route::patch('/updateAktif/{pendetaAktif}', 'PendetaAktifController@update');


//PENDETA PENSIUN

Route::get('/pendetaPensiun', 'PendetaPensiunController@index');
Route::get('/addPendetaPensiun', 'PendetaPensiunController@create');
Route::post('addPenPensiun', 'PendetaPensiunController@store');
Route::get('/detailPendetaPensiun/{pendetaPensiun}', 'PendetaPensiunController@show');
Route::delete('/detailPendetaPensiun/{pendetaPensiun}', 'PendetaPensiunController@destroy');
Route::get('/editPensiun/{pendetaPensiun}', 'PendetaPensiunController@edit');
Route::patch('/updatePensiun/{pendetaPensiun}', 'PendetaPensiunController@update');


//GEREJA
Route::get('/dataGereja', 'GerejaController@index');
Route::get('/addGereja', 'GerejaController@create');
Route::post('/addGerejaBaru', 'GerejaController@store');
Route::get('/detailGereja/{gereja}', 'GerejaController@show');
Route::delete('/detailGereja/{gereja}', 'GerejaController@destroy');
Route::get('/editDataGereja/{gereja}', 'GerejaController@edit');
Route::patch('/updateDataGereja/{gereja}', 'GerejaController@update');


//PENGUMUMAN
Route::get('/pengumuman', 'PengumumanController@index');
Route::get('/addPengumuman', 'PengumumanController@create');
Route::post('/addPengumumanBaru', 'PengumumanController@store');
Route::get('/detailPengumuman/{pengumuman}', 'PengumumanController@show');
Route::delete('/pengumuman/{pengumuman}', 'PengumumanController@destroy');
