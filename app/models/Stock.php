<?php
// app/models/Stock.php

class Stock {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    // Mengambil semua riwayat mutasi digabung dengan nama barang dan nama user pencatat
    public function getAllWithProduct() {
        $query = "SELECT s.*, p.nama_barang, p.kode_barang, u.username 
                  FROM stocks s 
                  JOIN products p ON s.product_id = p.id 
                  JOIN users u ON s.user_id = u.id 
                  ORDER BY s.created_at DESC";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();
    }

    // Digunakan oleh DashboardController sebelumnya
    public function getRecentTransactions($limit) {
        $query = "SELECT s.*, p.nama_barang 
                  FROM stocks s 
                  JOIN products p ON s.product_id = p.id 
                  ORDER BY s.created_at DESC LIMIT :limit";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
