@extends('layouts.layoutPendeta')

@section('title')
    <title>Edit Pendeta Aktif</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Edit Pendeta Aktif</h1>
                        </div>
                        <form class="user" action="/updateDataPendeta/{{ $pendetaAktif -> id }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="name" id="exampleFirstName" placeholder="Nama" value="{{ $pendetaAktif -> name}}rinaldi karokaro">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <br>
                                    <input type="text" class="form-control form-control-user" name="birthPlace" id="exampleRepeatPassword" placeholder="Tempat Lahir" value="{{ $pendetaAktif -> birthPlace}}nainggolan">
                                </div>
                                <div class="col-sm-6">
                                    Tanggal Lahir
                                    <input type="date" class="form-control form-control-user" name="birthDate" id="exampleInputPassword" placeholder="Tanggal Lahir" value="{{ $pendetaAktif -> birthDate}}23/01/2001">
                                </div>
                            </div>
                            <div class="form-group">
                                Tanggal Mulai Bertugas
                                <input type="date" class="form-control form-control-user" name="dutyBegin" id="exampleInputPassword" placeholder="Tanggal Bertugas" value="{{ $pendetaAktif -> dutyBegin}}">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="gender" id="exampleRepeatPassword" placeholder="Jenis Kelamin (L/P)" value="{{ $pendetaAktif -> gender}}L">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="workPlace" id="exampleFirstName" placeholder="Tempat Bertugas" value="{{ $pendetaAktif -> workPlace}}nainggolan">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="address" id="exampleFirstName" placeholder="Alamat" value="{{ $pendetaAktif -> address}}nainggolan">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="email" id="exampleFirstName" placeholder="Email" value="{{ $pendetaAktif -> email}}rinaldikarokaro">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="+62" disabled>
                                </div>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control form-control-user" name="phoneNumber" id="exampleFirstName" placeholder="Nomor Telepon" value="{{ $pendetaAktif -> phoneNumber}}82167857688">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
