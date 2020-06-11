@extends('layouts.layout')

@section('title')
    <title>Data Gereja</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Gereja</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>
                    {{$message}}
                </p>
            </div>
        @endif
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
                        <th>#</th>
                        <th>Nama Gereja</th>
                        <th>Alamat</th>
                        <th>Resort</th>
                        <th>Jumlah Jemaat</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataGereja as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="/detailGereja/{{ $row['id'] }}" class="table-link">{{ $row['nama'] }}</a></td>
                        <td>{{ $row['alamat'] }}</td>
                        <td>{{ $row['resort'] }}</td>
                        <td>{{ $row['jemaat'] }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
