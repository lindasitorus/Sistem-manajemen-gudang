<?php
// views/pages/products/index.php
// Variabel $products otomatis tersedia karena di-passing dari ProductController
?>
<div class="page-content-wrapper">
    <div class="page-action-header">
        <h2>Daftar Inventaris Barang</h2>
        <a href="index.php?url=products&action=create" class="btn btn-primary">+ Tambah Barang Baru</a>
    </div>

    <div class="table-responsive-container">
        <table class="table-data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>SKU / Kode</th>
                    <th>Nama Barang</th>
                    <th>Supplier Mitra</th>
                    <th>Stok Fisik</th>
                    <th>Harga Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                    <tr>
                        <td colspan="7" class="text-center text-muted">Belum ada data barang tersimpan di gudang.</td>
                    </tr>
                <?php else: ?>
                    <?php $no = 1; foreach ($products as $product): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><code><?= htmlspecialchars($product['kode_barang']); ?></code></td>
                            <td><strong><?= htmlspecialchars($product['nama_barang']); ?></strong></td>
                            <td><?= htmlspecialchars($product['nama_supplier'] ?? 'Tidak Ada'); ?></td>
                            <td>
                                <?php if ($product['stok'] <= 5): ?>
                                    <span class="badge badge-danger"><?= $product['stok']; ?> (Kritis)</span>
                                <?php else: ?>
                                    <span class="badge badge-success"><?= $product['stok']; ?></span>
                                <?php endif; ?>
                            </td>
                            <td>Rp <?= number_format($product['harga'], 0, ',', '.'); ?></td>
                            <td>
                                <div class="action-buttons-group">
                                    <a href="index.php?url=products&action=edit&id=<?= $product['id']; ?>" class="btn-action btn-edit">Edit</a>
                                    <a href="index.php?url=products&action=delete&id=<?= $product['id']; ?>" 
                                       class="btn-action btn-delete" 
                                       onclick="return confirm('Apakah Anda yakin ingin menghapus barang <?= htmlspecialchars($product['nama_barang']); ?> ini?')">
                                       Hapus
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
