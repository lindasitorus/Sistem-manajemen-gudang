<?php
// app/controllers/DashboardController.php

class DashboardController {
    private $productModel;
    private $supplierModel;
    private $stockModel;

    public function __construct() {
        // Pastikan model-model ini sudah dibuat di folder app/models/
        $this->productModel = new Product();
        $this->supplierModel = new Supplier();
        $this->stockModel = new Stock();
    }

    public function index() {
        // 1. Ambil data ringkasan (summary) dari database
        $totalProducts = $this->productModel->countAll();
        $totalSuppliers = $this->supplierModel->countAll();
        $lowStockProducts = $this->productModel->getLowStock(5); // Angka 5 adalah batas minimum stok kritis
        $recentMutations = $this->stockModel->getRecentTransactions(5); // Ambi 5 transaksi terakhir

        // 2. Kirim data ke tampilan (View)
        // Kita pecah menjadi beberapa variabel agar mudah dibaca di dalam file view
        $title = "Dashboard Ringkasan Gudang";
        
        // Load layout utama yang membungkus komponen navbar, header, dan halaman dashboard
        // Variabel yang didefinisikan di sini otomatis bisa diakses di dalam file view yang di-include
        require_once __DIR__ . '/../../views/layouts/main.php';
    }
}
