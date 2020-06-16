<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gereja;
use Illuminate\Support\Facades\Auth;

class DataGerejaPendetaController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $gereja = Gereja::all();
        return view('pendeta.dataGerejaPendeta',compact('gereja'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create()
    {
        return view('pendeta.addDataGerejaPendeta');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\RedirectResponse
    * @throws \Illuminate\Validation\ValidationException
    */
   public function strore(Request $request)
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
       return redirect('/dataGerejaPendeta')->with('succes', 'Data ditambah');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\PendetaAktif $pendetaAktif
    * @return \Illuminate\Http\Response
    */
   public function show(Gereja $gereja)
   {
       return view('pendeta.dataGerejaPendeta', compact('gereja'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\PendetaAktif $pendetaAktif
    * @return \Illuminate\Http\Response
    */
   public function edit(Gereja $gereja)
   {
       return view('pendeta.editDataGerejaPendeta', compact('gereja'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\PendetaAktif $pendetaAktif
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

       return redirect('/dataGerejaPendeta')->with('success', 'Data Diubah');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\PendetaAktif $pendetaAktif
    * @return \Illuminate\Http\Response
    */
   public function destroy(Gereja $gereja)
   {
       PendetaAktif::destroy($gereja->id);
       return redirect('/dataGerejaPendeta ')->with('success', 'Data Dihapus');
   }
}
