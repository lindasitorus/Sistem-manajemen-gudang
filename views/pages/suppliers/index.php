<?php
// views/pages/suppliers/index.php
// Variabel $suppliers otomatis dikirim dan tersedia dari SupplierController
?>
<div class="page-content-wrapper">
    <div class="page-action-header">
        <h2>Daftar Mitra & Pemasok (Supplier)</h2>
        <!-- Tombol Tambah Supplier Baru -->
        <a href="index.php?url=suppliers&action=create" class="btn btn-primary">+ Tambah Supplier</a>
    </div>

    <div class="table-responsive-container">
        <table class="table-data">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Supplier</th>
                    <th>No. Telepon / HP</th>
                    <th>Alamat Lengkap</th>
                    <th style="width: 180px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($suppliers)): ?>
                    <tr>
                        <td colspan="5" class="text-center text-muted">Belum ada data supplier yang terdaftar.</td>
                    </tr>
                <?php else: ?>
                    <?php $no = 1; foreach ($suppliers as $supplier): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><strong><?= htmlspecialchars($supplier['nama_supplier']); ?></strong></td>
                            <td><?= htmlspecialchars($supplier['telepon'] ?? '-'); ?></td>
                            <td><?= htmlspecialchars($supplier['alamat'] ?? '-'); ?></td>
                            <td>
                                <div class="action-buttons-group">
                                    <a href="index.php?url=suppliers&action=edit&id=<?= $supplier['id']; ?>" class="btn-action btn-edit">Edit</a>
                                    <a href="index.php?url=suppliers&action=delete&id=<?= $supplier['id']; ?>" 
                                       class="btn-action btn-delete" 
                                       onclick="return confirm('Apakah Anda yakin ingin menghapus supplier <?= htmlspecialchars($supplier['nama_supplier']); ?>? Semua barang yang terikat mungkin akan terpengaruh.')">
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
