@extends('layouts.layout')

@section('title')
    <title>Pengumuman</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pengumuman</h1>

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
                <a href="{{url('addPengumuman')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Pengumuman</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Tanggal Pembuatan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataPengumuman as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="/detailPengumuman/{{ $row['id'] }}" class="table-link">{{ $row['judul'] }}</a></td>
                        <td>{{ $row['created_at'] }}</td>
                        <td>
                            <form action="/pengumuman/{{ $row -> id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
