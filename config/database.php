<?php
// config/database.php

// Pengaturan konfigurasi database lokal (XAMPP)
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_manajemen_gudang";

// Membuat koneksi ke MySQL menggunakan ekstensi mysqli
$conn = mysqli_connect($host, $user, $pass, $db);

// Memeriksa status koneksi database
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Mengembalikan objek koneksi agar bisa digunakan di file model/controller lain
return $conn;