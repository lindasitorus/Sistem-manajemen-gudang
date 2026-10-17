// public/js/app.js

document.addEventListener('DOMContentLoaded', function() {
    // 1. AUTO-FADE ALERT MESSAGES
    // Menghilangkan pesan error atau notifikasi secara otomatis dalam waktu 4 detik
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(function(alert) {
        setTimeout(function() {
            alert.style.opacity = '0';
            alert.style.transition = 'opacity 0.5s ease';
            setTimeout(function() {
                alert.remove();
            }, 500);
        }, 4000);
    });

    // 2. INTERAKTIVITAS FORM MUTASI STOK
    // Memberikan proteksi dan validasi real-time pada halaman input stok
    const mutationForm = document.querySelector('form[action*="url=stocks"]');
    if (mutationForm) {
        const typeInput = mutationForm.querySelector('#type');
        const jumlahInput = mutationForm.querySelector('#jumlah');
        const keteranganInput = mutationForm.querySelector('#keterangan');

        // Mengubah placeholder keterangan secara dinamis berdasarkan tipe mutasi yang dipilih
        if (typeInput && keteranganInput) {
            typeInput.addEventListener('change', function() {
                const type = this.value;
                if (type === 'masuk') {
                    keteranganInput.placeholder = 'Contoh: Restock dari Supplier A, Pembelian Baru';
                } else if (type === 'keluar') {
                    keteranganInput.placeholder = 'Contoh: Pengiriman ke Cabang B, Barang Rusak';
                } else if (type === 'penyesuaian') {
                    keteranganInput.placeholder = 'Contoh: Hasil Stock Opname Bulanan';
                }
            });
        }

        // Mencegah input jumlah bernilai negatif atau nol saat form dikirim
        mutationForm.addEventListener('submit', function(e) {
            const jumlahVal = parseInt(jumlahInput.value, 10);
            if (isNaN(jumlahVal) || jumlahVal <= 0) {
                e.preventDefault();
                alert('Jumlah mutasi harus berupa angka bulat dan lebih besar dari 0!');
                jumlahInput.focus();
            }
        });
    }

    // 3. RESPONSIVE SIDEBAR TOGGLE (Opsional untuk perangkat Mobile)
    // Jika nantinya ditambahkan tombol burger menu di header untuk layar kecil
    const menuToggle = document.querySelector('.menu-toggle');
    const sidebar = document.querySelector('.app-sidebar');
    if (menuToggle && sidebar) {
        menuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });
    }
});
