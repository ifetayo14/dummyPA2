@extends('layouts.layoutPersonalia')

@section('title')
    <title>Edit Kas</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Edit Kas</h1>
                        </div>
                        <form class="user" action="/updateKasGerejaPersonalia/{{ $kasGereja -> id }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="nama_gereja" id="exampleFirstName" placeholder="Nama Gereja" value="{{ $kasGereja -> nama_gereja}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="bulan" id="exampleFirstName" placeholder="Bulan" value="{{ $kasGereja -> bulan}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="pemasukan" id="exampleFirstName" placeholder="Pemasukan" value="{{ $kasGereja -> pemasukan}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="pengeluaran" id="exampleFirstName" placeholder="Pengeluaran" value="{{ $kasGereja -> pengeluaran}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="total" id="exampleFirstName" placeholder="total" value="{{ $kasGereja -> total}}">
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
