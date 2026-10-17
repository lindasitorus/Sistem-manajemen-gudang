<?php
// public/index.php

// Memulai session untuk sistem login
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Menangkap parameter halaman dari URL (Contoh: localhost:8000/index.php?url=products)
// Jika parameter kosong, otomatis arahkan ke halaman utama/dashboard
$url = isset($_GET['url']) ? $_GET['url'] : 'products';

// 1. PANGGIL HEADER DI BAGIAN PALING ATAS
include __DIR__ . '/../views/components/header.php';

// 2. SISTEM ROUTING UNTUK MEMANGGIL HALAMAN DARI FOLDER PAGES
switch ($url) {
    case 'products':
        include __DIR__ . '/./views/pages/products/index.php';
        break;

    case 'register':
        include __DIR__ . '/./views/register.php';
        break;

        case 'suppliers':
            include __DIR__ . '/../views/pages/suppliers/index.php';
            break;
            
    case 'dashboard':
        include __DIR__ . '/../views/pages/dashboard.php';
        break;
        
    case 'login':
        include __DIR__ . '/../views/pages/auth/login.php';
        break;
        
    case 'register':
        include __DIR__ . '/../views/pages/auth/register.php';
        break;

    default:
        echo "<div class='alert alert-danger mt-3'>Halaman tidak ditemukan!</div>";
        break;
}

// 3. PANGGIL FOOTER DI BAGIAN PALING BAWAH
include __DIR__ . '/../views/components/footer.php';