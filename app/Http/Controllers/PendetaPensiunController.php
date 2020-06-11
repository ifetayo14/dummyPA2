<?php

namespace App\Http\Controllers;

use App\PendetaPensiun;
use Illuminate\Http\Request;
use function Sodium\compare;

class PendetaPensiunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPendeta = PendetaPensiun::all();
        return view('pendetaPensiun', compact('dataPendeta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addPendetaPensiun');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
            'dutyEnd' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|size:11'
        ]);

        $dataPendeta = new PendetaPensiun([
            'name' => $request->get('name'),
            'birthPlace' => $request->get('birthPlace'),
            'birthDate' => $request->get('birthDate'),
            'gender' => $request->get('gender'),
            'dutyBegin' => $request->get('dutyBegin'),
            'dutyEnd' => $request->get('dutyEnd'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'phoneNumber' => $request->get('phoneNumber')
        ]);

        $dataPendeta -> save();
        return redirect('/pendetaPensiun') -> with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PendetaPensiun  $pendetaPensiun
     * @return \Illuminate\Http\Response
     */
    public function show(PendetaPensiun $pendetaPensiun)
    {
        return view('detailPendetaPensiun', compact('pendetaPensiun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PendetaPensiun  $pendetaPensiun
     * @return \Illuminate\Http\Response
     */
    public function edit(PendetaPensiun $pendetaPensiun)
    {
        return view('editPendetaPensiun', compact('pendetaPensiun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\PendetaPensiun $pendetaPensiun
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, PendetaPensiun $pendetaPensiun)
    {
        $this->validate($request, [
            'name' => 'required',
            'birthPlace' => 'required',
            'birthDate' => 'required',
            'gender' => 'required',
            'dutyBegin' => 'required',
            'dutyEnd' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|size:11'
        ]);

        $pendetaPensiun->update([
            'name' => $request->name,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'gender' => $request->gender,
            'dutyBegin' => $request->dutyBegin,
            'dutyEnd' => $request->dutyEnd,
            'address' => $request->address,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber
        ]);

        return redirect('/pendetaPensiun ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PendetaPensiun  $pendetaPensiun
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendetaPensiun $pendetaPensiun)
    {
        PendetaPensiun::destroy($pendetaPensiun -> id);
        return redirect('/pendetaPensiun ')->with('success', 'Data Dihapus');
    }
}
