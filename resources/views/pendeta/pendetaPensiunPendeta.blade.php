@extends('layouts.layoutPendeta')

@section('title')
    <title>Data Pendeta Pensiun</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pendeta Pensiun</h1>

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
                <a href="{{url('addPendetaPensiunPendeta')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Pendeta Pensiun</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Tahun Pensiun</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($dataPendeta as $row)
                            <tr>
                                <td>{{ $loop -> iteration }}</td>
                                <td><a href="/detailPendetaPensiunPendeta/{{ $row['id'] }}">{{ $row['name'] }}</a></td>
                                <td>{{ $row['birthPlace'] }}, {{ $row['birthDate']  }}</td>
                                <td>{{ $row['gender'] }}</td>
                                <td>{{ $row['dutyEnd'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
