@extends('layouts.layout')

@section('title')
    <title>Detail Pengumuman</title>
@endsection

@section('main-content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4 pengDetTitle">
                <h1 class="h4 mb-0 text-gray-800">{{ $pengumuman -> judul }}</h1>
            </div>

            <hr style="background-color: gray; height: 0.6pt; margin-left: 2pt; margin-right: 2pt;">

            <div class="pengContent">
                {!! $pengumuman -> isi !!}
            </div>

            <div class="pengFooter">
                <hr style="background-color: gray; height: 0.4pt; margin-left: 2pt; margin-right: 2pt;">
                <div class="createdAt">
                    {{ $pengumuman -> created_at }}
                </div>
            </div>
        </div>
    </div>
@endsection
