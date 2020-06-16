@extends('layouts.layoutPersonalia')

@section('title')
    <title>Edit Data Gereja</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Edit Data Gereja {{$dataGereja -> nama_gereja}}</h1>
                        </div>
                        <form class="user" action="/updateDataGerejaPersonalia/{{ $dataGereja -> id }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="nama_gereja" id="exampleFirstName" placeholder="Nama Gereja" value="{{ $dataGereja -> nama_gereja}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="alamat" id="exampleFirstName" placeholder="Alamat" value="{{ $dataGereja -> alamat}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="no_tlp" id="exampleFirstName" placeholder="No Telepon" value="{{ $dataGereja -> no_tlp}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="email" id="exampleFirstName" placeholder="Email" value="{{ $dataGereja -> email}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="jlh_jemaat" id="exampleFirstName" placeholder="Jumlah Jemaat" value="{{ $dataGereja -> jlh_jemaat}}">
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
