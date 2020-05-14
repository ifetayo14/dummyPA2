@extends('layouts.layout')

@section('title')
    <title>Data Kolekte</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kolekte</h1>

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="komiteGereja"></canvas>
                    </div>
                </div>
            </div>

            <br>

            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Nama Gereja</th>
                                <th>Bulan</th>
                                <th>Minggu</th>
                                <th>Pemasukan (Rp)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="{{url('detailKolekteGereja')}}" class="table-link">HKBP Sitoluama</a></td>
                                <td>April</td>
                                <td>3</td>
                                <td>2.122.000</td>
                            </tr>
                            <tr>
                                <td><a href="">HKBP Sianjur Pohan Julu</a></td>
                                <td>April</td>
                                <td>3</td>
                                <td>1.519.713</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
