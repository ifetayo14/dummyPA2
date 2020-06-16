@extends('layouts.layoutPendeta')

@section('title')
    <title>Profil</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Gereja</h1>

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <table cellpadding="8" class="table">
                <tr>
                    <td class="td" colspan="1"width="00px">Nama Gereja</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2" width="320px">HKBP Sitoluama</td>
                    <td class="td" colspan="1" rowspan="4"><center><img src="{{(url('templ/img/loginGereja.jpg'))}}" style="height:200px;"></center></td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Alamat</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">Sitoluama</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">No Telepon</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">082178654588</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Email</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">Sitoluama@gmail.com</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Jumlah Jemaat</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">450</td>
                    <td class="td" colspan="1">
                    <!-- <center>
                        <a href="/editDataGerejaPendeta/{{ $dataGereja -> id }}" class="btn btn-primary">Edit</a>
                        <form action ="{{$dataGereja->id}}" method="POST" class="d-inline">
                            @method('delete');
                            @csrf
                        </form>
                    </center> -->
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
