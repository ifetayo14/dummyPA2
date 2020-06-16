<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataGereja;
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
         $dataGereja = DataGereja::all();
         return view('personalia.dataGerejaPersonalia',compact('dataGereja'));
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

        $dataGereja = new DataGereja([
            'nama_gereja' => $request->get('nama_gereja'),
            'alamat' => $request->get('alamat'),
            'no_tlp' => $request->get('no_tlp'),
            'email' => $request->get('email'),
            'jlh_jemaat' => $request->get('jlh_jemaat')
        ]);
        
        $dataGereja->save();
        return redirect('/dataPersonalia')->with('succes', 'Data ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataGereja $dataGereja
     * @return \Illuminate\Http\Response
     */
    public function show(DataGereja $dataGereja)
    {
        return view('personalia.detailDataGerejaPersonalia', compact('dataGereja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataGereja $dataGereja
     * @return \Illuminate\Http\Response
     */
    public function edit(DataGereja $dataGereja)
    {
        return view('personalia.editDataGerejaPersonalia', compact('dataGereja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataGereja $dataGereja
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, DataGereja $dataGereja)
    {
        $this->validate($request, [
            'nama_gereja' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
            'jlh_jemaat' => 'required'
        ]);
        $dataGereja->update([
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
     * @param  \App\DataGereja $dataGereja
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataGereja $dataGereja)
    {
        DataGereja::destroy($dataGereja->id);
        return redirect('/dataPersonalia ')->with('success', 'Data Dihapus');
    }
}
