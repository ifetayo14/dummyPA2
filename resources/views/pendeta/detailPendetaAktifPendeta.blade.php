@extends('layouts.layoutPendeta')

@section('title')
    <title>Detail Pendeta Aktif</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pendeta Aktif</h1>

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <table cellpadding="8" class="table">
                <tr>
                    <td class="td" colspan="1"width="00px">Nama</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2" width="320px">{{ $pendetaAktif -> name }}Rinaldi Tua Karokaro</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Tempat Tanggal Lahir</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaAktif -> birthPlace }}, {{ $pendetaAktif -> birthDate }} Sitoluama, 2000-01-23</td>
                    <td class="td" colspan="1" rowspan="5"><center><img src="{{(url('templ/img/user.png'))}}"></center></td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Jenis Kelamin</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaAktif -> gender }}L</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Tanggal Mulai Bertugas</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaAktif -> dutyBegin }}2020-06-11</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Tempat Bertugas</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaAktif -> workPlace }}Sitoluama</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Alamat</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaAktif -> address }}sitoluama</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Email</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">{{ $pendetaAktif -> email }}karokaro@gmail.com</td>
                    <td class="td" colspan="1" rowspan="2">
                        <center>
                            <a href="/editDataPendeta/{{ $pendetaAktif -> id }}" class="btn btn-primary">Edit</a>
                            <form action="{{ $pendetaAktif -> id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                            </form>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="td" colspan="1">No Telp</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">+62 {{ $pendetaAktif -> phoneNumber }}83245876788</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
