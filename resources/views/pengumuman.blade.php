@extends('layouts.layout')

@section('title')
    <title>Pengumuman</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pengumuman</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{url('addPengumuman')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Pengumuman</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal Pembuatan</th>
                        <th>Tanggal Berakhir</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="{{url('/detailPengumuman')}}" class="table-link">Daftar Pendeta yang Akan Pensiun Tahun Ini</a></td>
                        <td>10 April 2020</td>
                        <td>30 Desember 2020</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPengumuman')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
