@extends('layouts.layoutPersonalia')
@section('title')
    <title>Tambah Gereja</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Tambah Gereja</h1>
                        </div>
                        <form class="user" method="POST" action="{{url('dataGerejaPersonalia')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nama_gereja" class="form-control form-control-user @error('nama_gereja') is-invalid @enderror" id="exampleFirstName" placeholder="Nama Gereja" value="{{ old('nama_gereja') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror" id="exampleFirstName" placeholder="Alamat" value="{{ old('alamat') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="no_tlp" class="form-control form-control-user @error('no_tlp') is-invalid @enderror" id="exampleFirstName" placeholder="No Telepon" value="{{ old('no_tlp') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleFirstName" placeholder="Email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="jlh_jemaat" class="form-control form-control-user @error('jlh_jemaat') is-invalid @enderror" id="exampleFirstName" placeholder="Jumlah Jemaat" value="{{ old('jlh_jemaat') }}">
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
