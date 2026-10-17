<?php 
// Memuat komponen layout bagian atas
include __DIR__ . '/../components/header.php'; 
include __DIR__ . '/../components/navbar.php'; 
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h2>Dashboard Sistem Manajemen Gudang</h2>
            <p class="text-muted">Selamat datang kembali di panel kendali gudang.</p>
            <hr>
        </div>
    </div>

    <!-- Ringkasan Statistik -->
    <div class="row mt-3">
        <!-- Kartu Total Produk -->
        <div class="col-md-4 mb-3">
            <div class="card bg-primary text-white shadow">
                <div class="card-body">
                    <h5 class="card-title">Total Produk</h5>
                    <h2 class="display-4 font-weight-bold">120</h2>
                    <p class="card-text">Jenis barang terdaftar</p>
                </div>
            </div>
        </div>
        
        <!-- Kartu Total Stok -->
        <div class="col-md-4 mb-3">
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    <h5 class="card-title">Total Stok Fisik</h5>
                    <h2 class="display-4 font-weight-bold">4,520</h2>
                    <p class="card-text">Unit barang tersedia</p>
                </div>
            </div>
        </div>

        <!-- Kartu Supplier -->
        <div class="col-md-4 mb-3">
            <div class="card bg-warning text-dark shadow">
                <div class="card-body">
                    <h5 class="card-title">Mitra Supplier</h5>
                    <h2 class="display-4 font-weight-bold">15</h2>
                    <p class="card-text">Vendor aktif</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
// Memuat komponen layout bagian bawah
include __DIR__ . '/../components/footer.php'; 
?>