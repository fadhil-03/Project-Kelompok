@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
    <div class="jumbotron text-center bg-light p-5 rounded">
        <h1 class="display-4">Selamat Datang di User Management System</h1>
        <p class="lead">Aplikasi sederhana untuk mengelola data pengguna dan data truk.</p>
        <hr class="my-4">
        <p>
            Anda dapat mengakses berbagai fitur seperti melihat data pengguna, menambahkan pengguna baru, mengedit data, dan menghapus data.
        </p>
        <a class="btn btn-primary btn-lg" href="{{ route('users.index') }}" role="button">Kelola Data Pengguna</a>
        <a class="btn btn-success btn-lg" href="{{ route('trucks.index') }}" role="button">Kelola Data Truk</a>
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
</div>
@endsection
