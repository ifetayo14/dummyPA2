<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kas;
use Illuminate\Support\Facades\Auth;

class KasGerejaPendetaController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasGereja = Kas::all();
        return view('pendeta.kasPendeta', compact('kasGereja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendeta.addKasGerejaPendeta');
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
            'pemasukan' => 'required',
            'pengeluaran' => 'required',
            'total' => 'required'
        ]);

        $kasGereja = new Kas([
            'nama_gereja' => $request->get('nama_gereja'),
            'bulan' => $request->get('bulan'),
            'pemasukan' => $request->get('pemasukan'),
            'pengeluaran' => $request->get('pengeluaran'),
            'total' => $request->get('total')
        ]);

        $kasGereja->save();
        return redirect('/kasPendeta ')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kas $kasGereja
     * @return \Illuminate\Http\Response
     */
    public function show(Kas $kasGereja)
    {
        return view('pendeta.detailKasGerejaPendeta', compact('kasGereja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kas $kasGereja
     * @return \Illuminate\Http\Response
     */
    public function edit(Kas $kasGereja)
    {
        return view('pendeta.editKasPendeta', compact('kasGereja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kas $kasGereja
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Kas $kasGereja)
    {
        $this->validate($request, [
            'nama_gereja' => 'required',
            'bulan' => 'required',
            'pemasukan' => 'required',
            'pengeluaran' => 'required',
            'total' => 'required'
        ]);

        $kasGereja->update([
            'nama_gereja' => $request->nama_gereja,
            'bulan' => $request->bulan,
            'pemasukan' => $request->pemasukan,
            'pengeluaran' => $request->pengeluaran,
            'total' => $request->total
        ]);

        return redirect('/kasPendeta ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kas $kasGereja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kas $kasGereja)
    {
        Kas::destroy($kasGereja->id);
        return redirect('/kasPendeta ')->with('success', 'Data Dihapus');
    }
}
