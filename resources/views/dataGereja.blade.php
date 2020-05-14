@extends('layouts.layout')

@section('title')
    <title>Data Gereja</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Gereja</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{url('addGereja')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data Gereja</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nama Gereja</th>
                        <th>Alamat</th>
                        <th>Resort</th>
                        <th>Jumlah Jemaat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="{{url('/detailGereja')}}" class="table-link">HKBP Sitoluama</a></td>
                        <td>Sitoluama</td>
                        <td>Sitoluama</td>
                        <td>1561</td>
                    </tr>
                    <tr>
                        <td><a href="">HKBP Sianjur Pohan Julu</a></td>
                        <td>Pohan Julu, Siborong-Borong, Kabupaten Tapanuli Utara, Sumatera Utara 22474</td>
                        <td>Siborong-Borong</td>
                        <td>1263</td>
                    </tr>
                    <tr>
                        <td><a href="">HKBP DR.IL.Nommensen Sigumpar</a></td>
                        <td>Jln.Pdt.DR.IL.NOMMENSEN no.1 Sigumpar, Sigumpar Dangsina, Sigumpar, Kabupaten Toba Samosir, Sumatera Utara 22384</td>
                        <td>Sigumpar</td>
                        <td>2166</td>
                    </tr>
                    <tr>
                        <td><a href="">HKBP Pansurnapitu</a></td>
                        <td>Hutapea Banuarea, Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara 22413</td>
                        <td>Tarutung</td>
                        <td>962</td>
                    </tr>
                    <tr>
                        <td><a href="">HKBP Parsoburan</a></td>
                        <td>Parsoburan Tengah, Habinsaran, Kabupaten Toba Samosir, Sumatera Utara 22383</td>
                        <td>Habinsaran</td>
                        <td>1233</td>
                    </tr>
                    <tr>
                        <td><a href="">HKBP Pearaja Tarutung</a></td>
                        <td>Jl. Raja Pontas Lumban Tobing, Hutatoruan IX, Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara 22411</td>
                        <td>Tarutung</td>
                        <td>2861</td>
                    </tr>
                    <tr>
                        <td><a href="">HKBP Pangaloan</a></td>
                        <td>Pangaloan Silangkitang Pahae Jae, Lumban Gaol, Pahae Julu, Kabupaten Tapanuli Utara, Sumatera Utara 22417</td>
                        <td>Lumban Gaol</td>
                        <td>1259</td>
                    </tr>
                    <tr>
                        <td><a href="">HKBP Pardamean</a></td>
                        <td>Jl. Farel Pasaribu No.109, Pardamean, Siantar Marihat, Kota Pematang Siantar, Sumatera Utara 21122</td>
                        <td>Pematang Siantar</td>
                        <td>1165</td>
                    </tr>
                    <tr>
                        <td><a href="">HKBP Sibolga Baru</a></td>
                        <td>Jl. S.Parman, Pancuran Kerambil, Sibolga Kota, Kota Sibolga, Sumatera Utara 22531</td>
                        <td>Sibolga</td>
                        <td>989</td>
                    </tr>
                    <tr>
                        <td><a href="">HKBP Sibolga Kota</a></td>
                        <td>JL K.H. Zainul Arifin, No. 16, Sibolga Ilir, Sibolga Utara, Simare-Mare, Sibolga Utara, Kota Sibolga, Sumatera Utara 22513</td>
                        <td>Sibolga Utara</td>
                        <td>2123</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
