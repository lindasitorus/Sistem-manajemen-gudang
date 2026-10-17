<?php
// app/controllers/StockController.php

class StockController {
    private $stockModel;
    private $productModel;
    private $stockService;

    public function __construct() {
        $this->stockModel = new Stock();
        $this->productModel = new Product();
        $this->stockService = new StockService();
    }

    // 1. Tampilkan Riwayat Mutasi Stok (Read)
    public function index() {
        $stocks = $this->stockModel->getAllWithProduct();
        
        $title = "Mutasi & Penyesuaian Stok";
        $viewPage = __DIR__ . '/../../views/pages/stocks/index.php';
        
        // Memanggil layout utama
        require_once __DIR__ . '/../../views/layouts/main.php';
    }

    // 2. Transaksi Stok Masuk / Keluar / Penyesuaian (Create)
    public function create() {
        $error = '';
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['product_id'];
            $type      = $_POST['type']; // 'masuk', 'keluar', atau 'penyesuaian'
            $jumlah    = (int)$_POST['jumlah'];
            $keterangan= $_POST['keterangan'];
            $userId    = $_SESSION['user_id']; // Diambil dari session user yang login

            // Eksekusi logika bisnis melalui Service Layer
            $result = $this->stockService->processMutation($productId, $type, $jumlah, $keterangan, $userId);

            if ($result['status'] === true) {
                header("Location: index.php?url=stocks");
                exit();
            } else {
                $error = $result['message'];
            }
        }

        // Ambil data produk untuk pilihan dropdown form
        $products = $this->productModel->getAll();
        
        $title = "Input Mutasi Stok";
        $viewPage = __DIR__ . '/../../views/pages/stocks/create.php';
        
        require_once __DIR__ . '/../../views/layouts/main.php';
    }
}
