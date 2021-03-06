@extends('layouts.layoutPersonalia')
@section('title')
    <title>Tambah Kas</title>
@endsection

@section('main-content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Kas</h1>
                        </div>
                        <form class="user" method="POST" action="{{url('kasGereja')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nama_gereja" class="form-control form-control-user @error('nama_gereja') is-invalid @enderror" id="exampleFirstName" placeholder="Nama Gereja" value="{{ old('nama_gereja') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="bulan" class="form-control form-control-user @error('bulan') is-invalid @enderror" id="exampleFirstName" placeholder="Bulan" value="{{ old('bulan') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="pemasukan" class="form-control form-control-user @error('pemasukan') is-invalid @enderror" id="exampleFirstName" placeholder="Pemasukan" value="{{ old('pemasukan') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="pengeluaran" class="form-control form-control-user @error('pengeluaran') is-invalid @enderror" id="exampleFirstName" placeholder="Pengeluaran" value="{{ old('pengeluaran') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="total" class="form-control form-control-user @error('total') is-invalid @enderror" id="exampleFirstName" placeholder="Total" value="{{ old('total') }}">
                            </div>
                            <button href="#" class="btn btn-primary btn-user btn-block">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
