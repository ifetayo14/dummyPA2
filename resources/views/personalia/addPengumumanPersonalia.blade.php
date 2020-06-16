@extends('layouts.layoutPersonalia')
@section('title')
    <title>Tambah Pengumuman</title>
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
                        <form class="user" method="POST" action="{{url('pengumumanGereja')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="judul"class="form-control form-control-user @error('judul') is-invalid @enderror" id="exampleFirstName" placeholder="Judul" value="{{ old('judul') }}">
                            </div>
                            <div class="form-group">
                                <textarea  name="isi" style="width:630px;height:400px;" style="box-shadow:5px 5px 5px 5px grey;" class="ckeditor" id="ckeditor" placeholder="Isi Pengumuman" value="{{ old('isi') }}"></textarea>
                            </div>
                            <button href="#" class="btn btn-primary btn-user btn-block">
                                Simpan
                            </button>
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
