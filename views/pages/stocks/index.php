<?php
// views/pages/stocks/index.php
// Variabel $stocks otomatis tersedia karena di-passing dari StockController
?>
<div class="page-content-wrapper">
    <div class="page-action-header">
        <h2>Riwayat Mutasi & Sirkulasi Stok</h2>
        <a href="index.php?url=stocks&action=create" class="btn btn-primary">+ Input Mutasi Stok</a>
    </div>

    <div class="table-responsive-container">
        <table class="table-data">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Tanggal & Waktu</th>
                    <th>SKU / Kode</th>
                    <th>Nama Barang</th>
                    <th>Tipe Mutasi</th>
                    <th>Jumlah</th>
                    <th>Keterangan / Alasan</th>
                    <th>Operator</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($stocks)): ?>
                    <tr>
                        <td colspan="8" class="text-center text-muted">Belum ada riwayat mutasi stok yang tercatat.</td>
                    </tr>
                <?php else: ?>
                    <?php $no = 1; foreach ($stocks as $stock): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><small class="text-muted"><?= date('d F Y, H:i', strtotime($stock['created_at'])); ?></small></td>
                            <td><code><?= htmlspecialchars($stock['kode_barang']); ?></code></td>
                            <td><strong><?= htmlspecialchars($stock['nama_barang']); ?></strong></td>
                            <td>
                                <?php if ($stock['type'] === 'masuk'): ?>
                                    <span class="badge badge-success">Barang Masuk</span>
                                <?php elseif ($stock['type'] === 'keluar'): ?>
                                    <span class="badge badge-danger">Barang Keluar</span>
                                <?php else: ?>
                                    <span class="badge badge-warning">Penyesuaian</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <strong class="<?= ($stock['type'] === 'masuk') ? 'text-success' : (($stock['type'] === 'keluar') ? 'text-danger' : 'text-warning') ?>">
                                    <?= ($stock['type'] === 'masuk') ? '+' : (($stock['type'] === 'keluar') ? '-' : '') ?>
                                    <?= number_format($stock['jumlah']); ?>
                                </strong>
                            </td>
                            <td><span class="text-muted"><?= htmlspecialchars($stock['keterangan'] ?? '-'); ?></span></td>
                            <td><span class="user-operator">👤 <?= htmlspecialchars($stock['username']); ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
