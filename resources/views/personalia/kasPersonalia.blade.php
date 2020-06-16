@extends('layouts.layoutPersonalia')

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
                        <a href="{{url('addKasGerejaPersonalia')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Kas</span>
                        </a>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Gereja</th>
                                <th>Bulan</th>
                                <th>Pemasukan (Rp)</th>
                                <th>Pengeluaran (Rp)</th>
                                <th>Total (Rp)</th>
                            </tr>
                            </thead>
                            <tbody>
                    @foreach($kasGereja as $row)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td><a href="/detailKasPersonalia/{{$row['id']}}" class="table-link">{{$row['nama_gereja']}}</a></td>
                                <td>{{$row['bulan']}}</td>
                                <td>Rp {{$row['pemasukan']}}</td>
                                <td>Rp {{$row['pengeluaran']}}</td>
                                <td>Rp {{$row['total']}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
