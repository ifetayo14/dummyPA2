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

Route::get('/indexPersonalia', 'PagesController@indexPersonalia');

Route::get('/indexPendeta', 'PagesController@indexPendeta');

// Route::get('/dataGereja', function () {
//     return view('dataGereja');
// });

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

//DATA GEREJA
    //Personalia
Route::get('/dataPersonalia', 'DataGerejaPersonaliaController@index');
Route::get('/addDataGerejaPersonalia', 'DataGerejaPersonaliaController@create');
Route::post('dataGerejaPersonalia', 'DataGerejaPersonaliaController@store');
Route::get('/detailDataPersonalia/{dataGereja}', 'DataGerejaPersonaliaController@show');
Route::delete('/detailDataPersonalia/{dataGereja}', 'DataGerejaPersonaliaController@destroy');
Route::get('/editDataGerejaPersonalia/{dataGereja}', 'DataGerejaPersonaliaController@edit');
Route::patch('/updateDataGerejaPersonalia/{dataGereja}', 'DataGerejaPersonaliaController@update');
    
    //Pendeta
Route::get('/dataGerejaPendeta', 'DataGerejaPendetaController@show');
Route::get('/addDataGerejaPendeta', 'DataGerejaPendetaController@create');
Route::post('dtGerejaPendeta', 'DataGerejaPendetaController@store');
Route::get('/detailDataGerejaPendeta/{dataGereja}', 'DataGerejaPendetaController@show');
Route::delete('/detailDataGerejaPendeta/{dataGereja}', 'DataGerejaPendetaController@destroy');
Route::get('/editDataGerejaPendeta/{dataGereja}', 'DataGerejaPendetaController@edit');
Route::patch('/updateDataGerejaPendeta/{dataGereja}', 'DataGerejaPendetaController@update');


//KAS GEREJA
    //Personalia
Route::get('/kasPersonalia', 'KasGerejaPersonaliaController@index');
Route::get('/addKasGerejaPersonalia', 'KasGerejaPersonaliaController@create');
Route::post('kasGereja', 'KasGerejaPersonaliaController@store');
Route::get('/detailKasPersonalia/{kasGereja}', 'KasGerejaPersonaliaController@show');
Route::delete('/detailKasPersonalia/{kasGereja}', 'KasGerejaPersonaliaController@destroy');
Route::get('/editKasGerejaPersonalia/{kasGereja}', 'KasGerejaPersonaliaController@edit');
Route::patch('/updateKasGerejaPersonalia/{kasGereja}', 'KasGerejaPersonaliaController@update');

    //Pendeta
Route::get('/kasPendeta', 'KasGerejaPendetaController@index');
Route::get('/addKasGerejaPendeta', 'KasGerejaPendetaController@create');
Route::post('kasGerejaPendeta', 'KasGerejaPendetaController@store');
Route::get('/detailKasPendeta/{kasGereja}', 'KasGerejaPendetaController@show');
Route::delete('/detailKasPendeta/{kasGereja}', 'KasGerejaPendetaController@destroy');
Route::get('/editKasGerejaPendeta/{kasGereja}', 'KasGerejaPendetaController@edit');
Route::patch('/updateKasGerejaPendeta/{kasGereja}', 'KasGerejaPendetaController@update');

//PENGUMUMAN GEREJA
    //Personalia
Route::get('/indexPersonalia', 'PengumumanPersonaliaController@dashboard');
Route::get('/pengumumanPersonalia', 'PengumumanPersonaliaController@index');
Route::get('/addPengumumanPersonalia', 'PengumumanPersonaliaController@create');
Route::post('pengumumanGereja', 'PengumumanPersonaliaController@store');
Route::get('/detailPengumumanPersonalia/{pengumumanGereja}', 'PengumumanPersonaliaController@show');
Route::delete('/detailPengumumanPersonalia/{pengumumanGereja}', 'PengumumanPersonaliaController@destroy');
Route::get('/editPengumumanGerejaPersonalia/{pengumumanGereja}', 'PengumumanPersonaliaController@edit');
Route::patch('/updatePengumumanGerejaPersonalia/{pengumumanGereja}', 'PengumumanPersonaliaController@update');
Route::get('/detailPengumumanPersonaliaIndex/{pengumumanGereja}', 'PengumumanPersonaliaController@showIndex');

    //Pendeta
Route::get('/indexPendeta', 'PengumumanPendetaController@dashboard');
Route::get('/pengumumanPendeta', 'PengumumanPendetaController@index');
Route::get('/addPengumumanPendeta', 'PengumumanPendetaController@create');
Route::post('pengumumanPendeta', 'PengumumanPendetaController@store');
Route::get('/detailPengumumanPendeta/{pengumumanGereja}', 'PengumumanPendetaController@show');
Route::delete('/detailPengumumanPendeta/{pengumumanGereja}', 'PengumumanPendetaController@destroy');
Route::get('/editPengumumanGerejaPendeta/{pengumumanGereja}', 'PengumumanPendetaController@edit');
Route::patch('/updatePengumumanGerejaPendeta/{pengumumanGereja}', 'PengumumanPendetaController@update');
Route::get('/detailPengumumanPendetaIndex/{pengumumanGereja}', 'PengumumanPendetaController@showIndex');


//KOLEKTE GEREJA
    //Personalia
Route::get('/kolektePersonalia', 'KolekteGerejaPersonaliaController@index');
Route::get('/addKolekteGerejaPersonalia', 'KolekteGerejaPersonaliaController@create');
Route::post('kolekteGereja', 'KolekteGerejaPersonaliaController@store');
Route::get('/detailKolektePersonalia/{kolekteGereja}', 'KolekteGerejaPersonaliaController@show');
Route::delete('/detailKolektePersonalia/{kolekteGereja}', 'KolekteGerejaPersonaliaController@destroy');
Route::get('/editKolekteGerejaPersonalia/{kolekteGereja}', 'KolekteGerejaPersonaliaController@edit');
Route::patch('/updateKolekteGerejaPersonalia/{kolekteGereja}', 'KolekteGerejaPersonaliaController@update');

    //Pendeta
Route::get('/kolektePendeta', 'KolekteGerejaPendetaController@index');
Route::get('/addKolekteGerejaPendeta', 'KolekteGerejaPendetaController@create');
Route::post('kolekteGerejaPendeta', 'KolekteGerejaPendetaController@store');
Route::get('/detailKolektePendeta/{kolekteGereja}', 'KolekteGerejaPendetaController@show');
Route::delete('/detailKolektePendeta/{kolekteGereja}', 'KolekteGerejaPendetaController@destroy');
Route::get('/editKolekteGerejaPendeta/{kolekteGereja}', 'KolekteGerejaPendetaController@edit');
Route::patch('/updateKolekteGerejaPendeta/{kolekteGereja}', 'KolekteGerejaPendetaController@update');


//PENDETA AKTIF
    //Admin
Route::get('/pendetaAktif', 'PendetaAktifController@index');
Route::get('/addPendetaAktif', 'PendetaAktifController@create');
Route::post('penAktif', 'PendetaAktifController@store');
Route::get('/detailPendetaAktif/{pendetaAktif}', 'PendetaAktifController@show');
Route::delete('/detailPendetaAktif/{pendetaAktif}', 'PendetaAktifController@destroy');
Route::get('/editAktif/{pendetaAktif}', 'PendetaAktifController@edit');
Route::patch('/updateAktif/{pendetaAktif}', 'PendetaAktifController@update');
    
    //Personalia
Route::get('/pendetaAktifPersonalia', 'PendetaAktifPersonaliaController@index');
Route::get('/addPendetaAktifPersonalia', 'PendetaAktifPersonaliaController@create');
Route::post('penAktifPersonalia', 'PendetaAktifPersonaliaController@store');
Route::get('/detailPendetaAktifPersonalia/{pendetaAktif}', 'PendetaAktifPersonaliaController@show');
Route::delete('/detailPendetaAktifPersonalia/{pendetaAktif}', 'PendetaAktifPersonaliaController@destroy');
Route::get('/editAktifPersonalia/{pendetaAktif}', 'PendetaAktifPersonaliaController@edit');
Route::patch('/updateAktifPersonalia/{pendetaAktif}', 'PendetaAktifPersonaliaController@update');

    //Pendeta
// Route::get('/pendetaAktifPendeta', 'PendetaAktifPendetaController@index');
// Route::get('/addPendetaAktifPendeta', 'PendetaAktifPendetaController@create');
// Route::post('penAktifPendeta', 'PendetaAktifPendetaController@store');
// Route::get('/detailPendetaAktifPendeta/{pendetaAktif}', 'PendetaAktifPendetaController@show');
// Route::delete('/detailPendetaAktifPendeta/{pendetaAktif}', 'PendetaAktifPendetaController@destroy');
// Route::get('/editAktifPendeta/{pendetaAktif}', 'PendetaAktifPendetaController@edit');
// Route::patch('/updateAktifPendeta/{pendetaAktif}', 'PendetaAktifPendetaController@update');


// DATA PENDETA
Route::get('/dataPendeta', 'DataPendetaController@show');
Route::get('/addDataPendeta', 'DataPendetaController@create');
Route::post('dtPendeta', 'DataPendetaController@store');
Route::get('/dataPendeta/{dataPendeta}', 'DataPendetaController@show');
Route::delete('/dataPendeta/{dataPendeta}', 'DataPendetaController@destroy');
Route::get('/editDataPendeta/{dataPendeta}', 'DataPendetaController@edit');
Route::patch('/updateDataPendeta/{dataPendeta}', 'DataPendetaController@update');


//PENDETA PENSIUN
    //Admin
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
    //Personalia
Route::get('/pendetaPensiunPersonalia', 'PendetaPensiunPersonaliaController@index');
Route::get('/addPendetaPensiunPersonalia', 'PendetaPensiunPersonaliaController@create');
Route::post('addPenPensiunPersonalia', 'PendetaPensiunPersonaliaController@store');
Route::get('/detailPendetaPensiunPersonalia/{pendetaPensiun}', 'PendetaPensiunPersonaliaController@show');
Route::delete('/detailPendetaPensiunPersonalia/{pendetaPensiun}', 'PendetaPensiunPersonaliaController@destroy');
Route::get('/editPensiunPersonalia/{pendetaPensiun}', 'PendetaPensiunPersonaliaController@edit');
Route::patch('/updatePensiunPersonalia/{pendetaPensiun}', 'PendetaPensiunPersonaliaController@update');
