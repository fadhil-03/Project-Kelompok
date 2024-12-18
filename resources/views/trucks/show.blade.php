@extends('layouts.app')

@section('title', 'Detail Truk')

@section('content')
<div class="card">
    <div class="card-header bg-info text-white">
        <h5>Detail Data Truk</h5>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $truck->id }}</p>
        <p><strong>Nama Truk:</strong> {{ $truck->nama_truk }}</p>
        <p><strong>Jenis Truk:</strong> {{ $truck->jenis_truk }}</p>
        <p><strong>Status:</strong>
            @if($truck->status == 'available')
                <span class="badge bg-success">Tersedia</span>
            @else
                <span class="badge bg-danger">Tidak Tersedia</span>
            @endif
        </p>
        <p><strong>Dibuat Pada:</strong> {{ $truck->created_at->format('d M Y H:i') }}</p>
        <p><strong>Diupdate Pada:</strong> {{ $truck->updated_at->format('d M Y H:i') }}</p>

        <a href="{{ route('trucks.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
