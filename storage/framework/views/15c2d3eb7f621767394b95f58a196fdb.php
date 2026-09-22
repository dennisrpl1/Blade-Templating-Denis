

<?php $__env->startSection('title', 'Kontak & Pemesanan'); ?>

<?php $__env->startSection('content'); ?>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        
        <!-- Bagian Kiri: Informasi -->
        <div>
            <h1 style="color: var(--primary-color); margin-bottom: 15px;">Kirim Pesananmu</h1>
            <p style="margin-bottom: 30px; color: var(--text-muted);">Silakan isi formulir di samping untuk melakukan pemesanan porsi besar atau menanyakan ketersediaan menu hari ini.</p>
            
            <div class="card" style="background-color: var(--bg-dark); color: white;">
                <h3 style="margin-bottom: 10px; color: var(--primary-color);">Kontak Langsung</h3>
                <p>📍 Jl. Slamet Riyadi No. 123, Solo</p>
                <p>📞 Whatsapp: 0812-9999-8888</p>
                <p>✉️ Email: pesan@warisanrasa.com</p>
            </div>
        </div>

        <!-- Bagian Kanan: Formulir -->
        <div class="card">
            <form action="#">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" class="form-control" placeholder="Masukkan nama Anda..." required>
                </div>

                <div class="form-group">
                    <label for="kategori">Pilih Kategori</label>
                    <select id="kategori" class="form-control">
                        <option value="makanan">Makanan Jawa</option>
                        <option value="minuman">Minuman Khas Solo</option>
                        <option value="katering">Pesan Katering (Porsi Besar)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pesan">Detail Pesanan</label>
                    <textarea id="pesan" class="form-control" rows="5" placeholder="Tuliskan pesanan atau pertanyaan Anda di sini..." required></textarea>
                </div>

                <button type="button" class="btn-submit">Kirim Sekarang</button>
            </form>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\belajar-templating\resources\views/contact.blade.php ENDPATH**/ ?>