@extends('layouts.layoutPendeta')

@section('title')
    <title>Edit Kolekte</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Edit Kolekte</h1>
                        </div>
                        <form class="user" action="/updateKolekteGerejaPendeta/{{ $kolekteGereja -> id }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="nama_gereja" id="exampleFirstName" placeholder="Nama Gereja" value="{{ $kolekteGereja -> nama_gereja}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="bulan" id="exampleFirstName" placeholder="Bulan" value="{{ $kolekteGereja -> bulan}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="minggu" id="exampleFirstName" placeholder="Minggu Ke-" value="{{ $kolekteGereja -> minggu}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="pemasukan" id="exampleFirstName" placeholder="Pemasukan" value="{{ $kolekteGereja -> pemasukan}}">
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
