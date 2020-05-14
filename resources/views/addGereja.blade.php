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
                        <form class="user">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Gereja">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Pendeta yang Bertugas">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Resort">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Jumlah Jemaat">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="No Fax">
                                </div>
                            </div>
                            <a href="login.html" class="btn btn-primary btn-user btn-block">
                                Simpan
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
