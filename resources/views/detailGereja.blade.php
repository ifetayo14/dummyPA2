@extends('layouts.layout')

@section('title')
    <title>Data Detail Gereja</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data HKBP Sitoluama</h1>

    <div class="row">
        <div class="col-xl-1 col-lg-1"></div>
        <div class="col-xl-10 col-lg-7">
            <!-- DataTales Example -->
            <div class="card shadow mb-4"><div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DATA GEREJA</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-black-50"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/editDataGereja/{{ $gereja -> id }}">Edit</a>
                            <form action="{{ $gereja -> id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="dropdown-item">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Nama Gereja</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                            <td>{{ $gereja -> nama }}</td>
                        </tr>
                        <tr>
                            <td>Pendeta yang Bertugas</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                            <td>{{ $gereja -> pendeta }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                            <td>{{ $gereja -> alamat }}</td>
                        </tr>
                        <tr>
                            <td>Resort</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                            <td>{{ $gereja -> resort }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Jemaat</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                            <td>{{ $gereja -> jemaat }} jemaat.</td>
                        </tr>
                        <tr>
                            <td>No. Fax</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                            <td>{{ $gereja -> fax }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">GRAFIK PEMASUKAN KAS HKBP SITOLUAMA</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-black-50"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{url('detailKasGereja')}}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="kasGereja"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">GRAFIK PEMASUKAN KOLEKTE HKBP SITOLUAMA</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-black-50"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{url('detailKolekteGereja')}}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="komiteGereja"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
