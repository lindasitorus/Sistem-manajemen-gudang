<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk - Manajemen Gudang</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow border-0 col-md-6 mx-auto">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4">Form Tambah Barang Baru</h3>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" required placeholder="Contoh: Mouse Logitech">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select class="form-select">
                        <option>Elektronik</option>
                        <option>Aksesoris</option>
                        <option>Peralatan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Stok Awal</label>
                    <input type="number" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Simpan Ke Gudang</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>