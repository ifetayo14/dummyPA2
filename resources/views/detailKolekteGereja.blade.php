@extends('layouts.layout')

@section('title')
    <title>Detail Kolekte Gereja</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kolekte Gereja HKBP Sitoluama</h1>

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
                                <th>Bulan</th>
                                <th>Minggu</th>
                                <th>Pemasukan (Rp)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>April</td>
                                <td>3</td>
                                <td>2.122.000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
