@extends('layouts.layout')

@section('title')
    <title>Data Kas</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kas</h1>

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
                                <th>Pemasukan (Rp)</th>
                                <th>Pengeluaran (Rp)</th>
                                <th>Total (Rp)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="{{url('detailKasGereja')}}" class="table-link">HKBP Sitoluama</a></td>
                                <td>April</td>
                                <td>2.213.521</td>
                                <td>1.124.512</td>
                                <td>1.090.009‬</td>
                            </tr>
                            <tr>
                                <td><a href="">HKBP Sianjur Pohan Julu</a></td>
                                <td>April</td>
                                <td>1.532.123</td>
                                <td>512.410</td>
                                <td>1.019.713</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
