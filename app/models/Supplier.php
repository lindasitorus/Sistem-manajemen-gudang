<?php
// app/models/Supplier.php

class Supplier {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM suppliers ORDER BY id DESC";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();
    }

    public function findById($id) {
        $query = "SELECT * FROM suppliers WHERE id = :id LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function insert($data) {
        $query = "INSERT INTO suppliers (nama_supplier, telepon, alamat) 
                  VALUES (:nama_supplier, :telepon, :alamat)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }

    public function update($data) {
        $query = "UPDATE suppliers SET nama_supplier = :nama_supplier, 
                  telepon = :telepon, alamat = :alamat WHERE id = :id";
        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }

    public function delete($id) {
        $query = "DELETE FROM suppliers WHERE id = :id";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([':id' => $id]);
    }

    public function countAll() {
        $stmt = $this->db->query("SELECT COUNT(*) as total FROM suppliers");
        return $stmt->fetch()['total'];
    }
}
