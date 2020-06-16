@extends('layouts.layoutPersonalia')

@section('title')
    <title>Detail Kas Gereja</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kolekte Gereja {{$kolekteGereja -> nama_gereja}}</h1>

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <table cellpadding="8" class="table">
                <tr>
                    <td class="td" colspan="1"width="00px">Nama Gereja</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2" width="320px">{{ $kolekteGereja -> nama_gereja }}</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Bulan</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $kolekteGereja -> bulan }}</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Minggu Ke-</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $kolekteGereja -> minggu }}</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Pemasukan</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $kolekteGereja -> pemasukan }}</td>
                </tr>>
                <tr>
                    <td class="td" colspan="3">
                    <center>
                            <a href="/editKolekteGerejaPersonalia/{{ $kolekteGereja -> id }}" class="btn btn-primary">Edit</a>
                            <form action="{{ $kolekteGereja -> id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </center>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
