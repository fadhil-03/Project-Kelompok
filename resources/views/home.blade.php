@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid p-0" style="background-image: url('{{ asset('image/image.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 110vh;">
    <div class="container mt-5">
        <div class="jumbotron text-center bg-light p-5 rounded">
            <h1 class="display-4">Selamat Datang di Sistem Pengguna Truk Ekspedisi</h1>
            <p class="lead">Aplikasi sederhana untuk mengelola data pengguna dan data truk.</p>
            <hr class="my-4">
            <p>
                Anda dapat mengakses berbagai fitur seperti melihat data pengguna, menambahkan pengguna baru, mengedit data, dan menghapus data.
            </p>
        </div>

        <div class="row text-center mt-5">
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h5 class="my-0 font-weight-normal">Data Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lihat, tambah, dan kelola data pengguna dengan mudah.</p>
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Lihat Pengguna</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h5 class="my-0 font-weight-normal">Data Truk</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Kelola data truk untuk pengiriman barang.</p>
                        <a href="{{ route('trucks.index') }}" class="btn btn-success">Lihat Truk</a>
                    </div>
                </div>
            </div>
        </div>
    <div class="row text-center mt-5">
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h5 class="my-0 font-weight-normal">HINO</h5>
                        <img src="image/Hino.jpg" alt="deskripsi_gambar" style="width:60%; height:auto;"/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Truk Hino adalah salah satu kendaraan komersial terkemuka yang dikenal karena daya tahan, efisiensi, dan performa yang handal. Dikenal sebagai salah satu produsen truk terkemuka di dunia, Hino menawarkan berbagai model truk yang dirancang untuk memenuhi kebutuhan berbagai industri, mulai dari logistik, konstruksi, hingga distribusi barang.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h5 class="my-0 font-weight-normal">COLT</h5>
                        <img src="image/colt.jpg" alt="deskripsi_gambar" style="width:60%; height:auto;"/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Truk Colt, yang diproduksi oleh Mitsubishi Fuso, merupakan salah satu kendaraan komersial yang sangat populer di Indonesia dan berbagai negara lainnya. Dikenal karena kehandalan dan performanya, truk Colt dirancang untuk memenuhi berbagai kebutuhan transportasi, mulai dari pengiriman barang hingga keperluan konstruksi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center" style="background-color: white";>
            <div class="row justify-content-center">
                <div class="col-9 text-center h2">ABOUT</div>
                <div class="col-sm-5 col-md-6">MUHAMMAD RAZIB ADITYA <br><img src="image/Razib.jpg" alt="deskripsi_gambar" style="width:60%; height:auto;"/></div>
                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">MUHAMMAD FADHIL<br><img src="image/Fadhil.jpg" alt="deskripsi_gambar" style="width:60%; height:auto;"/></div>
            </div>
        </div>  
    </div>
</div>
@endsection
