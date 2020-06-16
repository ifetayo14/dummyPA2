<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kolekte;
use Illuminate\Support\Facades\Auth;

class KolekteGerejaPersonaliaController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kolekteGereja = Kolekte::all();
        return view('personalia.kolektePersonalia', compact('kolekteGereja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalia.addKolekteGerejaPersonalia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_gereja' => 'required',
            'bulan' => 'required',
            'minggu' => 'required',
            'pemasukan' => 'required'
        ]);

        $kasGereja = new Kolekte([
            'nama_gereja' => $request->get('nama_gereja'),
            'bulan' => $request->get('bulan'),
            'minggu' => $request->get('minggu'),
            'pemasukan' => $request->get('pemasukan')
        ]);

        $kasGereja->save();
        return redirect('/kolektePersonalia ')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kolekte $kolekteGereja
     * @return \Illuminate\Http\Response
     */
    public function show(Kolekte $kolekteGereja)
    {
        return view('personalia.detailKolekteGerejaPersonalia', compact('kolekteGereja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kolekte $kolekteGereja
     * @return \Illuminate\Http\Response
     */
    public function edit(Kolekte $kolekteGereja)
    {
        return view('personalia.editKolektePersonalia', compact('kolekteGereja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kolekte $kolekteGereja
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Kolekte $kolekteGereja)
    {
        $this->validate($request, [
            'nama_gereja' => 'required',
            'bulan' => 'required',
            'minggu' => 'required',
            'pemasukan' => 'required'
        ]);

        $kolekteGereja->update([
            'nama_gereja' => $request->nama_gereja,
            'bulan' => $request->bulan,
            'minggu' => $request->minggu,
            'pemasukan' => $request->pemasukan
        ]);

        return redirect('/kolektePersonalia ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kolekte $kolekteGereja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kolekte $kolekteGereja)
    {
        Kolekte::destroy($kolekteGereja->id);
        return redirect('/kolektePersonalia ')->with('success', 'Data Dihapus');
    }
}
