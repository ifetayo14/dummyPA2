@extends('layouts.layout')

@section('title')
    <title>Detail Kas Gereja</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kas Gereja HKBP Sitoluama</h1>

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
                                <th>Pemasukan (Rp)</th>
                                <th>Pengeluaran (Rp)</th>
                                <th>Total (Rp)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>April</td>
                                <td>2.213.521</td>
                                <td>1.124.512</td>
                                <td>1.090.009‬</td>
                            </tr>
                            <tr>
                                <td>Maret</td>
                                <td>2.241.521</td>
                                <td>1.153.512</td>
                                <td>1.088.009‬</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
