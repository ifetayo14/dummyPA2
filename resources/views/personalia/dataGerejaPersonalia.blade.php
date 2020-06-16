@extends('layouts.layoutPersonalia')

@section('title')
    <title>Data Gereja</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Gereja</h1>

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
                        <a href="{{url('addDataGerejaPersonalia')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Gereja</span>
                        </a>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Gereja</th>
                                <th>Alamat</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                    @foreach($dataGereja as $row)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td><a href="/detailDataPersonalia/{{$row['id']}}" class="table-link">{{$row['nama_gereja']}}</a></td>
                                <td>{{$row['alamat']}}</td>
                                <td>{{$row['email']}}</td>
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
