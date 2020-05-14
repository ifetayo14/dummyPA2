@extends('layouts.layout')

@section('title')
    <title>Data Pendeta Pensiun</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pendeta Pensiun</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{url('addPendetaPensiun')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Pendeta Pensiun</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Lama Bertugas (tahun)</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="">Norbert Ade Sanagsi Simanungkalit</a></td>
                        <td>Laki-laki</td>
                        <td>43</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaPensiun')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="{{url('/detailPendetaPensiun')}}" class="table-link">Rinaldy Hutauruk</a></td>
                        <td>Laki-laki</td>
                        <td>43</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaPensiun')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Grace D. Sitanggang</a></td>
                        <td>Perempuan</td>
                        <td>46</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaPensiun')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Rotua Gita Simanjuntak</a></td>
                        <td>Perempuan</td>
                        <td>42</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaPensiun')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Ika Marsaulina Silaban</a></td>
                        <td>Perempuan</td>
                        <td>46</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaPensiun')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Melysa Tampubolon</a></td>
                        <td>Perempuan</td>
                        <td>49</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaPensiun')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">	Ova Ferdinan Marbun</a></td>
                        <td>Laki-laki</td>
                        <td>41</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaPensiun')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Yepta Zagarino Samosir</a></td>
                        <td>Laki-laki</td>
                        <td>38</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaPensiun')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Banta Solagratia</a></td>
                        <td>Laki-laki</td>
                        <td>35</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaPensiun')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Johannes P M Manurung</a></td>
                        <td>Laki-laki</td>
                        <td>45</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaPensiun')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
