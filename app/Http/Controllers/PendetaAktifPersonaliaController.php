<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PendetaAktif;
use Illuminate\Support\Facades\Auth;

class PendetaAktifPersonaliaController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPendeta = PendetaAktif::all();
        return view('personalia.pendetaAktifPersonalia', compact('dataPendeta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalia.addPendetaAktifPersonalia');
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
            'name' => 'required',
            'birthPlace' => 'required',
            'birthDate' => 'required',
            'gender' => 'required',
            'dutyBegin' => 'required',
            'workPlace' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|size:11'
        ]);

        $pendetaAktif = new PendetaAktif([
            'name' => $request->get('name'),
            'birthPlace' => $request->get('birthPlace'),
            'birthDate' => $request->get('birthDate'),
            'gender' => $request->get('gender'),
            'dutyBegin' => $request->get('dutyBegin'),
            'workPlace' => $request->get('workPlace'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'phoneNumber' => $request->get('phoneNumber')
        ]);

        $pendetaAktif->save();
        return redirect('/pendetaAktifPersonalia ')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PendetaAktif $pendetaAktif
     * @return \Illuminate\Http\Response
     */
    public function show(PendetaAktif $pendetaAktif)
    {
        return view('personalia.detailPendetaAktifPersonalia', compact('pendetaAktif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PendetaAktif $pendetaAktif
     * @return \Illuminate\Http\Response
     */
    public function edit(PendetaAktif $pendetaAktif)
    {
        return view('personalia.editAktifPersonalia', compact('pendetaAktif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PendetaAktif $pendetaAktif
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, PendetaAktif $pendetaAktif)
    {
        $this->validate($request, [
            'name' => 'required',
            'birthPlace' => 'required',
            'birthDate' => 'required',
            'gender' => 'required',
            'dutyBegin' => 'required',
            'workPlace' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|size:11'
        ]);

        $pendetaAktif->update([
            'name' => $request->name,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'gender' => $request->gender,
            'dutyBegin' => $request->dutyBegin,
            'workPlace' => $request->workPlace,
            'address' => $request->address,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber
        ]);

        return redirect('/pendetaAktifPersonalia ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PendetaAktif $pendetaAktif
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendetaAktif $pendetaAktif)
    {
        PendetaAktif::destroy($pendetaAktif->id);
        return redirect('/pendetaPensiunPersonalia ')->with('success', 'Data Dihapus');
    }
}
