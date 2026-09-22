

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Spanduk Utama -->
    <div class="hero-section">
        <h1>Selamat Datang di Warisan Rasa</h1>
        <p>Cita rasa Nusantara yang autentik, langsung ke meja makan Anda.</p>
    </div>

    <h2 style="margin-bottom: 20px; border-left: 4px solid var(--primary-color); padding-left: 10px;">Menu Spesial Hari Ini</h2>

    <!-- Daftar Produk dengan Grid -->
    <div class="grid-container">
        
        <!-- Kartu 1 -->
        <div class="card">
            <div class="card-img" style="background: url('https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?w=500') center/cover;"></div>
            <div class="card-body">
                <span class="badge">Makanan Jawa</span>
                <h3 class="card-title">Nasi Liwet Komplit</h3>
                <p class="card-text">Nasi gurih dengan suwiran ayam kampung, sayur labu siam, dan telur pindang khas keraton.</p>
                <br>
                <strong>Rp 35.000</strong>
            </div>
        </div>

        <!-- Kartu 2 -->
        <div class="card">
            <div class="card-img" style="background: url('https://images.unsplash.com/photo-1626202484081-37ce92e071ff?w=500') center/cover;"></div>
            <div class="card-body">
                <span class="badge">Makanan Jawa</span>
                <h3 class="card-title">Gudeg Spesial Jogja</h3>
                <p class="card-text">Nangka muda yang dimasak lambat bersama santan, disajikan dengan krecek pedas.</p>
                <br>
                <strong>Rp 40.000</strong>
            </div>
        </div>

        <!-- Kartu 3 -->
        <div class="card">
            <div class="card-img" style="background: url('https://images.unsplash.com/photo-1599307767316-776affdc9827?w=500') center/cover;"></div>
            <div class="card-body">
                <span class="badge">Minuman Khas Solo</span>
                <h3 class="card-title">Wedang Ronde Hangat</h3>
                <p class="card-text">Kombinasi bola ketan isi kacang dengan kuah jahe hangat yang menenangkan tubuh.</p>
                <br>
                <strong>Rp 15.000</strong>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\belajar-templating\resources\views/home.blade.php ENDPATH**/ ?>