<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Pengguna Truk Ekspedisi')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('users.index') }}">Sistem Pengguna Truk Ekspedisi</a>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    <footer style="background-color: #f8f9fa; padding: 20px; text-align: center; border-top: 1px solid #e9ecef;">
    <div class="container">
        <p style="margin: 0; font-size: 14px; color: #6c757d;">
            &copy; 2024 Sistem Pengguna Truk Ekspedisi. Semua hak dilindungi. 
            <br>
            Dibangun dengan <a href="https://laravel.com" target="_blank" style="color: #007bff; text-decoration: none;">Laravel</a>.
        </p>
        <p style="margin: 5px 0 0; font-size: 12px; color: #6c757d;">
            Untuk pertanyaan atau dukungan, silakan hubungi kami di <a href="mailto:support@ekspedisi.com" style="color: #007bff; text-decoration: none;">support@ekspedisi.com</a>.
        </p>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
