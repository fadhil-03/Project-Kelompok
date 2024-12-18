@extends('layouts.app')

@section('title', 'Detail Pengguna')

@section('content')
<div class="container">
    <h2>Detail Pengguna</h2>
    <div class="card">
        <div class="card-header">
            <h5>{{ $user->name }}</h5>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Created At:</strong> {{ $user->created_at }}</p>
            <p><strong>Updated At:</strong> {{ $user->updated_at }}</p>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
