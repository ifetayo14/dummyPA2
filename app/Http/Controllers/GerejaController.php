<?php

namespace App\Http\Controllers;

use App\Gereja;
use Illuminate\Http\Request;

class GerejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataGereja = Gereja::all();
        return view('dataGereja', compact('dataGereja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addGereja');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'pendeta' => 'required',
            'alamat' => 'required',
            'resort' => 'required',
            'jemaat' => 'required',
            'fax' => 'required'
        ]);

        $dataGereja = new Gereja([
            'nama' => $request->get('nama'),
            'pendeta' => $request->get('pendeta'),
            'alamat' => $request->get('alamat'),
            'resort' => $request->get('resort'),
            'jemaat' => $request->get('jemaat'),
            'fax' => $request->get('fax')
        ]);

        $dataGereja->save();
        return redirect('/dataGereja')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gereja  $gereja
     * @return \Illuminate\Http\Response
     */
    public function show(Gereja $gereja)
    {
        return view('detailGereja', compact('gereja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gereja  $gereja
     * @return \Illuminate\Http\Response
     */
    public function edit(Gereja $gereja)
    {
        return view('editDataGereja', compact('gereja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gereja  $gereja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gereja $gereja)
    {
        $this->validate($request, [
            'nama' => 'required',
            'pendeta' => 'required',
            'alamat' => 'required',
            'resort' => 'required',
            'jemaat' => 'required',
            'fax' => 'required'
        ]);

        $gereja->update([
            'nama' => $request->nama,
            'pendeta' => $request->pendeta,
            'alamat' => $request->alamat,
            'resort' => $request->resort,
            'jemaat' => $request->jemaat,
            'fax' => $request->fax
        ]);

        return redirect('/dataGereja ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gereja  $gereja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gereja $gereja)
    {
        Gereja::destroy($gereja->id);
        return redirect('/dataGereja ')->with('success', 'Data Dihapus');
    }
}
