<?php
// app/middleware/AuthMiddleware.php

class AuthMiddleware {
    /**
     * Memeriksa apakah pengguna sudah login.
     * Jika belum, pengguna akan dialihkan paksa ke halaman login.
     */
    public static function check() {
        // Memastikan session sudah dimulai sebelum mengecek data session
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Jika variabel session 'user_id' tidak ada, berarti pengguna belum login
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?url=login");
            exit(); // Hentikan eksekusi script selanjutnya
        }
    }

    /**
     * Memeriksa status tamu (Guest).
     * Digunakan untuk memproteksi halaman login/register agar user yang SUDAH login
     * tidak bisa masuk kembali ke form login/register dan langsung diarahkan ke dashboard.
     */
    public static function guest() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user_id'])) {
            header("Location: index.php?url=dashboard");
            exit();
        }
    }
}
