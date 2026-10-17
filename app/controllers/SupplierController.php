<?php
// app/controllers/SupplierController.php

class SupplierController {
    private $supplierModel;

    public function __construct() {
        $this->supplierModel = new Supplier();
    }

    // 1. Tampilkan Semua Supplier (Read)
    public function index() {
        $suppliers = $this->supplierModel->getAll();
        
        $title = "Manajemen Supplier / Pemasok";
        $viewPage = __DIR__ . '/../../views/pages/suppliers/index.php';
        
        // Memanggil layout utama
        require_once __DIR__ . '/../../views/layouts/main.php';
    }

    // 2. Tambah Supplier Baru (Create)
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nama_supplier' => $_POST['nama_supplier'],
                'telepon'       => $_POST['telepon'],
                'alamat'        => $_POST['alamat']
            ];

            if ($this->supplierModel->insert($data)) {
                header("Location: index.php?url=suppliers");
                exit();
            }
        }

        $title = "Tambah Supplier Baru";
        $viewPage = __DIR__ . '/../../views/pages/suppliers/create.php';
        
        require_once __DIR__ . '/../../views/layouts/main.php';
    }

    // 3. Ubah Data Supplier (Update)
    public function edit() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if (!$id) {
            header("Location: index.php?url=suppliers");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id'            => $id,
                'nama_supplier' => $_POST['nama_supplier'],
                'telepon'       => $_POST['telepon'],
                'alamat'        => $_POST['alamat']
            ];

            if ($this->supplierModel->update($data)) {
                header("Location: index.php?url=suppliers");
                exit();
            }
        }

        $supplier = $this->supplierModel->findById($id);
        $title = "Edit Data Supplier";
        $viewPage = __DIR__ . '/../../views/pages/suppliers/edit.php';
        
        require_once __DIR__ . '/../../views/layouts/main.php';
    }

    // 4. Hapus Supplier (Delete)
    public function delete() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        
        if ($id) {
            $this->supplierModel->delete($id);
        }
        
        header("Location: index.php?url=suppliers");
        exit();
    }
}
