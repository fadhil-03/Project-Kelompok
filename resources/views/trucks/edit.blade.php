@extends('layouts.app')

@section('title', 'Edit Truk')

@section('content')
<div class="card">
    <div class="card-header bg-warning text-white">
        <h5>Edit Data Truk</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('trucks.update', $truck->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_truk" class="form-label">Nama Truk</label>
                <input type="text" class="form-control" id="nama_truk" name="nama_truk" value="{{ $truck->name }}" required>
            </div>
            <div class="mb-3">
                <label for="jenis_truk" class="form-label">Jenis Truk</label>
                <input type="text" class="form-control" id="jenis_truk" name="jenis_truk" value="{{ $truck->type }}" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="available" {{ $truck->status == 'available' ? 'selected' : '' }}>Tersedia</option>
                    <option value="unavailable" {{ $truck->status == 'unavailable' ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ route('trucks.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
