<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PengumumanGereja;
use Illuminate\support\Facades\Auth;

class PengumumanPersonaliaController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumumanGereja = PengumumanGereja::all();
        return view('personalia.pengumumanPersonalia', compact('pengumumanGereja'));
    }

    public function dashboard()
     {
         $pengumumanGereja = PengumumanGereja::all();
         return view('personalia.indexPersonalia',compact('pengumumanGereja'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalia.addPengumumanPersonalia');
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
        // PengumumanGereja::create([
        //     'judul'=> $request->judul,
        //     'isi'=> $request->isi
        // ]);
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
            ]);

        $pengumumanGereja = new PengumumanGereja([
            'judul' => $request->get('judul'),
            'isi' => $request->get('isi')
        ]);

        $pengumumanGereja->save();
        return redirect('/pengumumanPersonalia ')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PengumumanGereja $pengumumanGereja
     * @return \Illuminate\Http\Response
     */
    public function show(PengumumanGereja $pengumumanGereja)
    {
        return view('personalia.detailPengumumanPersonalia', compact('pengumumanGereja'));
    }

    public function showIndex(PengumumanGereja $pengumumanGereja)
    {
        return view('personalia.detailPengumumanPersonaliaIndex', compact('pengumumanGereja'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PengumumanGereja $pengumumanGereja
     * @return \Illuminate\Http\Response
     */
    public function edit(PengumumanGereja $pengumumanGereja)
    {
        return view('personalia.editPengumumanPersonalia', compact('pengumumanGereja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PengumumanGereja $pengumumanGereja
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, PengumumanGereja $pengumumanGereja)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $pengumumanGereja->update([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        return redirect('/pengumumanPersonalia ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PengumumanGereja $pengumumanGereja
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengumumanGereja $pengumumanGereja)
    {
        PengumumanGereja::destroy($pengumumanGereja->id);
        return redirect('/pengumumanPersonalia ')->with('success', 'Data Dihapus');
    }
}
