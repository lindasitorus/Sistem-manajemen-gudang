public function getAll() {
    // Menggabungkan dengan tabel supplier untuk menampilkan nama pemasok barang
    $query = "SELECT p.*, s.nama_supplier FROM products p 
              LEFT JOIN suppliers s ON p.supplier_id = s.id 
              ORDER BY p.id DESC";
    $stmt = $this->db->query($query);
    return $stmt->fetchAll();
}

public function findById($id) {
    $query = "SELECT * FROM products WHERE id = :id LIMIT 1";
    $stmt = $this->db->prepare($query);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch();
}

public function insert($data) {
    $query = "INSERT INTO products (kode_barang, nama_barang, supplier_id, stok, harga) 
              VALUES (:kode_barang, :nama_barang, :supplier_id, :stok, :harga)";
    $stmt = $this->db->prepare($query);
    return $stmt->execute($data);
}

public function update($data) {
    $query = "UPDATE products SET kode_barang = :kode_barang, nama_barang = :nama_barang, 
              supplier_id = :supplier_id, harga = :harga WHERE id = :id";
    $stmt = $this->db->prepare($query);
    return $stmt->execute($data);
}

public function delete($id) {
    $query = "DELETE FROM products WHERE id = :id";
    $stmt = $this->db->prepare($query);
    return $stmt->execute([':id' => $id]);
}
