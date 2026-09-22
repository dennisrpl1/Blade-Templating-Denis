<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Warisan Rasa</title>
    <!-- Memanggil CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header & Navigasi -->
    <header>
        <div class="logo-teks">Warisan Rasa</div>
        <nav>
            <a href="/home">Beranda</a>
            <a href="/about">Tentang Kami</a>
            <a href="/contact">Pemesanan</a>
        </nav>
    </header>

    <!-- Konten Utama (Berubah tiap halaman) -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer Lengkap -->
    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h3>Tentang Warisan Rasa</h3>
                <p>Kami menyajikan berbagai makanan Jawa dan minuman khas Solo dengan resep turun-temurun yang otentik dan berkualitas.</p>
            </div>
            <div class="footer-col">
                <h3>Tautan Cepat</h3>
                <p><a href="/home" style="color:#9ca3af; text-decoration:none;">Beranda</a></p>
                <p><a href="/about" style="color:#9ca3af; text-decoration:none;">Cerita Kami</a></p>
                <p><a href="/contact" style="color:#9ca3af; text-decoration:none;">Hubungi Kami</a></p>
            </div>
            <div class="footer-col">
                <h3>Jam Operasional</h3>
                <p>Senin - Jumat: 08.00 - 20.00 WIB</p>
                <p>Sabtu - Minggu: 09.00 - 22.00 WIB</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2026 Warisan Rasa. Dibuat menggunakan Laravel Blade.
        </div>
    </footer>

</body>
</html>