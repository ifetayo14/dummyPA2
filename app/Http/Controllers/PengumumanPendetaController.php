<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengumuman;
use Illuminate\support\Facades\Auth;

class PengumumanPendetaController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('pendeta.pengumumanPendeta', compact('pengumuman'));
    }

    public function dashboard()
     {
         $pengumuman = Pengumuman::all();
         return view('pendeta.indexPendeta',compact('pengumuman'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendeta.addPengumumanPendeta');
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
            'judul' => 'required',
            'isi' => 'required'
            ]);

        $pengumuman = new Pengumuman([
            'judul' => $request->get('judul'),
            'isi' => $request->get('isi')
        ]);

        $pengumuman->save();
        return redirect('/pengumumanPendeta ')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengumuman $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        return view('pendeta.detailPengumumanPendeta', compact('pengumuman'));
    }

    public function showIndex(Pengumuman $pengumuman)
    {
        return view('pendeta.detailPengumumanPendetaIndex', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengumuman $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('pendeta.editPengumumanPendeta', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengumuman $pengumuman
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $pengumuman->update([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        return redirect('/pengumumanPendeta ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengumuman $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        Pengumuman::destroy($pengumuman->id);
        return redirect('/pengumumanPendeta ')->with('success', 'Data Dihapus');
    }
}
