<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gereja;
use Illuminate\Support\Facades\Auth;

class DataGerejaPersonaliaController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         $gereja = Gereja::all();
         return view('personalia.dataGerejaPersonalia',compact('gereja'));
     }

     

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
     {
         return view('personalia.addDataGerejaPersonalia');
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
            'alamat' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
            'jlh_jemaat' => 'required'
        ]);

        $gereja = new Gereja([
            'nama_gereja' => $request->get('nama_gereja'),
            'alamat' => $request->get('alamat'),
            'no_tlp' => $request->get('no_tlp'),
            'email' => $request->get('email'),
            'jlh_jemaat' => $request->get('jlh_jemaat')
        ]);
        
        $gereja->save();
        return redirect('/dataPersonalia')->with('succes', 'Data ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gereja $gereja
     * @return \Illuminate\Http\Response
     */
    public function show(Gereja $gereja)
    {
        return view('personalia.detailDataGerejaPersonalia', compact('gere$gereja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gereja $gereja
     * @return \Illuminate\Http\Response
     */
    public function edit(Gereja $gereja)
    {
        return view('personalia.editDataGerejaPersonalia', compact('gere$gereja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gereja $gereja
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Gereja $gereja)
    {
        $this->validate($request, [
            'nama_gereja' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
            'jlh_jemaat' => 'required'
        ]);
        $gereja->update([
            'nama_gereja' => $request->nama_gereja,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email,
            'jlh_jemaat' => $request->jlh_jemaat
        ]);

        return redirect('/dataPersonalia ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gereja $gereja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gereja $gereja)
    {
        Gereja::destroy($gereja->id);
        return redirect('/dataPersonalia ')->with('success', 'Data Dihapus');
    }
}
