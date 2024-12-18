@extends('layouts.app')

@section('title', 'Daftar Truk')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truck List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Tambahkan jika menggunakan CSS -->
</head>
<body>
    <div class="container">
        <h1>Daftar Truck</h1>
        <a href="{{ route('trucks.create') }}" class="btn btn-primary">Tambah Truck</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; margin-top: 20px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Truck</th>
                    <th>Jenis Truck</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trucks as $truck)
                    <tr>
                        <td>{{ $truck->id }}</td>
                        <td>{{ $truck->nama_truk }}</td>
                        <td>{{ $truck->jenis_truk }}</td>
                        <td>{{ $truck->status }}</td>
                        <td>{{ $truck->created_at }}</td>
                        <td>
                            <a href="{{ route('trucks.show', $truck->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('trucks.edit', $truck->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('trucks.destroy', $truck->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center;">Tidak ada data truck.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
