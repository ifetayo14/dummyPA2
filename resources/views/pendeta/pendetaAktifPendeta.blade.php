@extends('layouts.layoutPendeta')

@section('title')
    <title>Data Pendeta Aktif</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pendeta Aktif</h1>

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
                <a href="{{url('addPendetaAktifPendeta')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Pendeta Aktif</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Bertugas</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataPendeta as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="/detailPendetaAktifPendeta/{{ $row['id'] }}">{{$row['name']}}</a></td>
                            <td>{{$row['birthPlace']}}, {{$row['birthDate']}}</td>
                            <td>{{$row['gender']}}</td>
                            <td>{{$row['workPlace']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
