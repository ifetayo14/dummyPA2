@extends('layouts.layoutPendeta')

@section('title')
    <title>Edit Pengumuman</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Edit Pengumuman</h1>
                        </div>
                        <form class="user" action="/updatePengumumanGerejaPendeta/{{ $pengumumanGereja -> id }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="judul" id="exampleFirstName" placeholder="Judul" value="{{ $pengumumanGereja -> judul}}">
                            </div>
                            <div class="form-group">
                                <textarea type="textarea" class="form-control form-control-user" name="isi" id="exampleFirstName" placeholder="isi" value="{{ $pengumumanGereja -> isi}}">{{ $pengumumanGereja -> isi}}</textarea>
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan"/>
                        </form>
                        <script>
                            CKEDITOR.replace('isi');
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
