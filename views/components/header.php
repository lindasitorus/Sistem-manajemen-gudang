<?php
// views/components/header.php
// Memastikan session aman jika belum dimulai di file utama
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? htmlspecialchars($title) : "Manajemen Gudang"; ?></title>
    
    <!-- Menyisipkan Framework Bootstrap CSS agar tampilan rapi dan otomatis berbentuk kotak/tabel -->
    <link href="https://jsdelivr.net" rel="stylesheet">
    
    <style>
        /* Anda bisa menambahkan custom CSS tambahan di sini jika diperlukan */
        .app-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 15px 0;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<header class="app-header">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="header-title">
            <!-- Menampilkan Judul halaman secara dinamis berdasarkan variabel dari controller -->
            <h2 class="m-0"><?= isset($title) ? htmlspecialchars($title) : "Manajemen Gudang"; ?></h2>
        </div>
        
        <div class="header-profile">
            <span class="user-role badge bg-primary">Halo, Admin</span>
            <!-- Menampilkan nama user yang sedang login dari session -->
        </div>
    </div>
</header>

<!-- Pembuka tag main container untuk membungkus konten utama halaman -->
<main class="container">