@extends('layouts.layout')

@section('title')
    <title>Tambah Data Gereja Baru</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Gereja</h1>
                        </div>
                        <form class="user" method="post" action="{{ url('addGerejaBaru') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror" id="exampleFirstName" placeholder="Nama Gereja" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="pendeta" class="form-control form-control-user @error('pendeta') is-invalid @enderror" id="exampleFirstName" placeholder="Nama Pendeta yang Bertugas" value="{{ old('pendeta') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror" id="exampleFirstName" placeholder="Alamat" value="{{ old('alamat') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="resort" class="form-control form-control-user @error('resort') is-invalid @enderror" id="exampleFirstName" placeholder="Resort" value="{{ old('resort') }}">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" name="jemaat" class="form-control form-control-user @error('jemaat') is-invalid @enderror" id="exampleRepeatPassword" placeholder="Jumlah Jemaat" value="{{ old('jemaat') }}">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="fax" class="form-control form-control-user @error('fax') is-invalid @enderror" id="exampleFirstName" placeholder="No Fax" value="{{ old('fax') }}">
                                </div>
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
