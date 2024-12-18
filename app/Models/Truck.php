<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $table = 'trucks'; // Nama tabel di database

    protected $fillable = [
        'status',
        'nama_truk',
        'jenis_truk',
    ];
}
