@extends('layouts.layout')

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
                            <h1 class="h4 text-gray-900 mb-4">Edit Data Gereja</h1>
                        </div>
                        <form class="user" action="/updateDataGereja/{{ $gereja -> id }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Gereja" value="{{ $gereja -> nama }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="pendeta" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Pendeta yang Bertugas" value="{{ $gereja -> pendeta }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="alamat" class="form-control form-control-user" id="exampleFirstName" placeholder="Alamat" value="{{ $gereja -> alamat }}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="resort" class="form-control form-control-user" id="exampleFirstName" placeholder="Resort" value="{{ $gereja -> resort }}">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" name="jemaat" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Jumlah Jemaat" value="{{ $gereja -> jemaat }}">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="fax" class="form-control form-control-user" id="exampleFirstName" placeholder="No Fax" value="{{ $gereja -> fax }}">
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
