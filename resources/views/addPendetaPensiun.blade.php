@extends('layouts.layout')

@section('title')
    <title>Tambah Pendeta Pensiun</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Tambah Pendeta Pensiun</h1>
                        </div>
                        <form class="user">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <br>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Tempat Lahir">
                                </div>
                                <div class="col-sm-6">
                                    Tanggal Lahir
                                    <input type="date" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tanggal Pembuatan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    Tanggal Bertugas
                                    <input type="date" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tanggal Pembuatan">
                                </div>
                                <div class="col-sm-6">
                                    Tanggal Pensiun
                                    <input type="date" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tanggal Pembuatan">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Alamat">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Jenis Kelamin (L/P)">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control form-control-user" id="exampleFirstName" placeholder="Nomor Telepon">
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
