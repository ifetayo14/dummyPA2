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
                    <td class="td" colspan="2" width="320px">Pdt. Rinaldy Hutauruk, S.Th</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Tempat Tanggal Lahir</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">Medan, 27 September 1954</td>
                    <td class="td" colspan="1" rowspan="5"><center><img src="{{(url('templ/img/user.png'))}}"></center></td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Jenis Kelamin</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">Laki-laki</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Tanggal Mulai Bertugas</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">24 Mei 1976</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Tanggal Pensiun</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">24 April 2019</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Alamat</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">Jl. Perdamaian, No. 14, Medan</td>
                </tr>
                <tr>
                    <td class="td" colspan="1">Email</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">rinaldy125@gmail.com</td>
                    <td class="td" colspan="1" rowspan="2"><center><a href="{{url('editPendetaPensiun')}}" class="table-link"><i class="fas fa-edit"></i> UBAH</a></center><center>
                            <a href="" class="table-link"><i class="fas fa-trash"></i> HAPUS</a></center></td>
                </tr>
                <tr>
                    <td class="td" colspan="1">No Telp</td>
                    <td class="td" colspan="1">:</td>
                    <td class="td" colspan="2">083344565768</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
