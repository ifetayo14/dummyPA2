@extends('layouts.layoutPendeta')

@section('title')
    <title>Edit Pendeta Pensiun</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Edit Pendeta Pensiun</h1>
                        </div>
                        <form class="user" action="/updatePensiunPendeta/{{ $pendetaPensiun -> id }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleFirstName" placeholder="Nama" value="{{ $pendetaPensiun -> name }}">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <br>
                                    <input type="text" name="birthPlace" class="form-control form-control-user @error('birthPlace') is-invalid @enderror" id="exampleRepeatPassword" placeholder="Tempat Lahir" value="{{ $pendetaPensiun -> birthPlace }}">
                                </div>
                                <div class="col-sm-6">
                                    Tanggal Lahir
                                    <input type="date" name="birthDate" class="form-control form-control-user @error('birthDate') is-invalid @enderror" id="exampleInputPassword" placeholder="Tanggal Lahir" value="{{ $pendetaPensiun -> birthDate }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    Tanggal Mulai Bertugas
                                    <input type="date" name="dutyBegin" class="form-control form-control-user @error('dutyBegin') is-invalid @enderror" id="exampleInputPassword" placeholder="Tanggal Mulai Bertugas" value="{{ $pendetaPensiun -> dutyBegin }}">
                                </div>
                                <div class="col-sm-6">
                                    Tanggal Pensiun
                                    <input type="date" name="dutyEnd" class="form-control form-control-user @error('dutyEnd') is-invalid @enderror" id="exampleInputPassword" placeholder="Tanggal Mulai Bertugas" value="{{ $pendetaPensiun -> dutyEnd }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control form-control-user @error('address') is-invalid @enderror" id="exampleFirstName" placeholder="Alamat" value="{{ $pendetaPensiun -> address }}">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" name="gender" class="form-control form-control-user @error('gender') is-invalid @enderror" id="exampleRepeatPassword" placeholder="Jenis Kelamin (L/P)" value="{{ $pendetaPensiun -> gender }}">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleFirstName" placeholder="Email" value="{{ $pendetaPensiun -> email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="+62" disabled>
                                </div>
                                <div class="col-sm-10">
                                    <input type="number" name="phoneNumber" class="form-control form-control-user @error('phoneNumber') is-invalid @enderror" id="exampleFirstName" placeholder="Nomor Telepon" value="{{ $pendetaPensiun -> phoneNumber }}">
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
