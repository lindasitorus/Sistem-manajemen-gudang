<?php
// app/controllers/ProductController.php

class ProductController {
    private $productModel;
    private $supplierModel;

    public function __construct() {
        $this->productModel = new Product();
        $this->supplierModel = new Supplier(); // Diperlukan untuk dropdown saat tambah/edit barang
    }

    // 1. Tampilkan Semua Produk (Read)
    public function index() {
        $products = $this->productModel->getAll();
        
        $title = "Manajemen Barang";
        $viewPage = __DIR__ . '/../../views/pages/products/index.php';
        
        // Memanggil layout utama
        require_once __DIR__ . '/../../views/layouts/main.php';
    }

    // 2. Tambah Produk Baru (Create)
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'kode_barang' => $_POST['kode_barang'],
                'nama_barang' => $_POST['nama_barang'],
                'supplier_id' => $_POST['supplier_id'],
                'stok'        => $_POST['stok'],
                'harga'       => $_POST['harga']
            ];

            if ($this->productModel->insert($data)) {
                header("Location: index.php?url=products");
                exit();
            }
        }

        // Ambil data supplier untuk opsi pilihan di form
        $suppliers = $this->supplierModel->getAll();
        $title = "Tambah Barang Baru";
        $viewPage = __DIR__ . '/../../views/pages/products/create.php';
        
        require_once __DIR__ . '/../../views/layouts/main.php';
    }

    // 3. Ubah Produk (Update)
    public function edit() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if (!$id) {
            header("Location: index.php?url=products");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id'          => $id,
                'kode_barang' => $_POST['kode_barang'],
                'nama_barang' => $_POST['nama_barang'],
                'supplier_id' => $_POST['supplier_id'],
                'harga'       => $_POST['harga']
                // Stok biasanya tidak diubah langsung di sini, melainkan melalui StockController/Mutation
            ];

            if ($this->productModel->update($data)) {
                header("Location: index.php?url=products");
                exit();
            }
        }

        $product = $this->productModel->findById($id);
        $suppliers = $this->supplierModel->getAll();
        $title = "Edit Barang";
        $viewPage = __DIR__ . '/../../views/pages/products/edit.php';
        
        require_once __DIR__ . '/../../views/layouts/main.php';
    }

    // 4. Hapus Produk (Delete)
    public function delete() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        
        if ($id) {
            $this->productModel->delete($id);
        }
        
        header("Location: index.php?url=products");
        exit();
    }
}
