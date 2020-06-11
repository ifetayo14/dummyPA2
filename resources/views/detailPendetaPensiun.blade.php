@extends('layouts.layout')

@section('title')
    <title>Detail Pendeta Pensiun</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pendeta Pensiun</h1>

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <table cellpadding="8" class="table">
                <tr>
                    <td class="td" colspan="1"width="00px">Nama</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2" width="320px">{{ $pendetaPensiun -> name }}</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Tempat Tanggal Lahir</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaPensiun -> birthPlace }}, {{ $pendetaPensiun -> birthDate }}</td>
                    <td class="td" colspan="1" rowspan="5"><center><img src="{{(url('templ/img/user.png'))}}"></center></td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Jenis Kelamin</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaPensiun -> gender }}</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Tanggal Mulai Bertugas</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaPensiun -> dutyBegin }}</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Tanggal Pensiun</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaPensiun -> dutyEnd }}</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Alamat</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaPensiun -> address }}</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Email</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaPensiun -> email }}</td>
                    <td class="td" colspan="1" rowspan="2">
                        <center>
                            <a href="/editPensiun/{{ $pendetaPensiun -> id }}" class="btn btn-primary">Edit</a>
                            <form action="{{ $pendetaPensiun -> id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="td" colspan="1">No Telp</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">+62 {{ $pendetaPensiun -> phoneNumber }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
