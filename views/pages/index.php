<?php
// Memulai session untuk mengamankan halaman
session_start();

// Mengambil kata kunci halaman dari URL (misal: ?url=suppliers)
$url = isset($_GET['url']) ? $_GET['url'] : 'dashboard';

// Mengatur perpindahan halaman secara otomatis
switch ($url) {
    case 'dashboard':
        include '../views/pages/dashboard.php';
        break;

    case 'login':
        include '../views/pages/auth/login.php';
        break;

    case 'register':
        include '../views/pages/auth/register.php';
        break;

    case 'products':
        include '../views/pages/products/index.php';
        break;

    // INI KODE UNTUK MEMBUAT HALAMAN SUPPLIER BERFUNGSI:
    case 'suppliers':
        include '../views/pages/suppliers/index.php';
        break;

    case 'stocks':
        include '../views/pages/stocks/index.php';
        break;

    default:
        echo "<h3>Halaman tidak ditemukan!</h3>";
        break;
}