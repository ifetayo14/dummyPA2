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
                        <form class="user" method="post" action="{{ url('addPengumumanBaru') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="judul" class="form-control form-control-user" id="exampleFirstName" placeholder="Judul">
                            </div>
                            <div class="form-group">
                                <textarea type="" name="isi" class="form-control" id="" placeholder="Isi" style="height: 200px"></textarea>
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

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'isi' );
    </script>
@endsection


