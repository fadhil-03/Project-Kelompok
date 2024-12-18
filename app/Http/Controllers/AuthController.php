<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Pastikan model User sudah ada
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ==========================
    // Menampilkan Form Registrasi
    // ==========================
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // ==========================
    // Proses Registrasi User
    // ==========================
    public function register(Request $request)
    {
        // Validasi Input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan User ke Database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
        ]);

        // Redirect ke Halaman Login
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    // ==========================
    // Menampilkan Form Login
    // ==========================
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // ==========================
    // Proses Login User
    // ==========================
    public function login(Request $request)
    {
        // Validasi Input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek Kredensial Login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect ke Dashboard atau Halaman Utama
            return redirect()->route('home')->with('success', 'Login successful!');
        }

        // Jika Gagal
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    // ==========================
    // Logout User
    // ==========================
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
