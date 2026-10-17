<?php
// app/services/StockService.php

class StockService {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    /**
     * Memproses mutasi stok (Masuk, Keluar, Penyesuaian) dengan database transaction.
     */
    public function processMutation($productId, $type, $jumlah, $keterangan, $userId) {
        // Validasi input awal
        if ($jumlah <= 0) {
            return ['status' => false, 'message' => 'Jumlah mutasi harus lebih besar dari 0.'];
        }

        try {
            // Memulai transaksi database agar aman jika ada error di tengah jalan
            $this->db->beginTransaction();

            // 1. Ambil data produk saat ini untuk mengecek stok awal
            $stmtProduct = $this->db->prepare("SELECT stok FROM products WHERE id = :id FOR UPDATE");
            $stmtProduct->execute([':id' => $productId]);
            $product = $stmtProduct->fetch();

            if (!$product) {
                $this->db->rollBack();
                return ['status' => false, 'message' => 'Produk tidak ditemukan.'];
            }

            $stokAwal = (int)$product['stok'];
            $stokAkhir = $stokAwal;

            // 2. Hitung kalkulasi stok berdasarkan tipe mutasi
            if ($type === 'masuk') {
                $stokAkhir = $stokAwal + $jumlah;
            } elseif ($type === 'keluar') {
                if ($stokAwal < $jumlah) {
                    $this->db->rollBack();
                    return ['status' => false, 'message' => 'Stok tidak mencukupi untuk melakukan pengeluaran barang.'];
                }
                $stokAkhir = $stokAwal - $jumlah;
            } elseif ($type === 'penyesuaian') {
                // Pada penyesuaian/stock opname, nilai 'jumlah' langsung menjadi stok baru fisik di gudang
                $stokAkhir = $jumlah;
                // Hitung selisih untuk dicatat di keterangan (opsional)
                $selisih = $stokAkhir - $stokAwal;
                $keterangan .= " (Penyesuaian fisik dari {$stokAwal} ke {$stokAkhir}, selisih: {$selisih})";
            } else {
                $this->db->rollBack();
                return ['status' => false, 'message' => 'Tipe mutasi tidak valid.'];
            }

            // 3. Simpan riwayat mutasi ke tabel 'stocks'
            $queryStock = "INSERT INTO stocks (product_id, user_id, type, jumlah, keterangan) 
                           VALUES (:product_id, :user_id, :type, :jumlah, :keterangan)";
            $stmtStock = $this->db->prepare($queryStock);
            $stmtStock->execute([
                ':product_id' => $productId,
                ':user_id'    => $userId,
                ':type'        => $type,
                ':jumlah'      => $jumlah,
                ':keterangan'  => $keterangan
            ]);

            // 4. Update stok fisik terbaru di tabel 'products'
            $queryUpdateProduct = "UPDATE products SET stok = :stok_akhir WHERE id = :id";
            $stmtUpdateProduct = $this->db->prepare($queryUpdateProduct);
            $stmtUpdateProduct->execute([
                ':stok_akhir' => $stokAkhir,
                ':id'         => $productId
            ]);

            // Jika semua langkah berhasil tanpa error, komit transaksinya
            $this->db->commit();
            return ['status' => true, 'message' => 'Mutasi stok berhasil diproses.'];

        } catch (Exception $e) {
            // Jika terjadi kegagalan sistem, batalkan semua perubahan database di atas
            $this->db->rollBack();
            return ['status' => false, 'message' => 'Gagal memproses stok: ' . $e->getMessage()];
        }
    }
}
