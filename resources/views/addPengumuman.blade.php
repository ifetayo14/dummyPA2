@extends('layouts.layout')

@section('title')
    <title>Tambah Pengumuman Baru</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Tambah Pengumuman</h1>
                        </div>
                        <form class="user">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Judul">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 date">
                                    Tanggal Pembuatan
                                    <input type="date" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tanggal Pembuatan">
                                </div>
                                <div class="col-sm-6">
                                    Tanggal Berakhir
                                    <input type="date" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Tanggal Berakhir">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea type="" class="form-control" id="exampleFirstName" placeholder="Isi" style="height: 200px"></textarea>
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
