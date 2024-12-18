<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    // Tampilkan semua data truck
    public function index()
    {
        $trucks = Truck::all();
        return view('trucks.index', compact('trucks'));
    }

    // Tampilkan form untuk membuat truck baru
    public function create()
    {
        return view('trucks.create');
    }

    // Simpan data truck baru
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'nama_truk' => 'required|string|max:255',
            'jenis_truk' => 'required|string|max:255',
            'status' => 'required|in:available,unavailable',
        ]);

        // Simpan data ke database
        Truck::create([
            'nama_truk' => $request->nama_truk,
            'jenis_truk' => $request->jenis_truk,
            'status' => $request->status,
        ]);

        return redirect()->route('trucks.index')->with('success', 'Truck berhasil ditambahkan.');
    }

    // Tampilkan detail data truck
    public function show($id)
    {
        $truck = Truck::findOrFail($id);
        return view('trucks.show', compact('truck'));
    }

    // Tampilkan form edit truck
    public function edit($id)
    {
        $truck = Truck::findOrFail($id);
        return view('trucks.edit', compact('truck'));
    }

    // Update data truck
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_truk' => 'required|string|max:255',
            'jenis_truk' => 'required|string|max:255',
            'status' => 'required|in:available,unavailable',
        ]);

        $truck = Truck::findOrFail($id);
        $truck->update([
            'nama_truk' => $request->nama_truk,
            'jenis_truk' => $request->jenis_truk,
            'status' => $request->status,
        ]);

        return redirect()->route('trucks.index')->with('success', 'Truck berhasil diperbarui.');
    }

    // Hapus data truck
    public function destroy($id)
    {
        $truck = Truck::findOrFail($id);
        $truck->delete();

        return redirect()->route('trucks.index')->with('success', 'Truck berhasil dihapus.');
    }
}
