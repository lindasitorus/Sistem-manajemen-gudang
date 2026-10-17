<?php
// app/helpers/AuthHelper.php

class AuthHelper {
    /**
     * Mengamankan password mentah menggunakan algoritma BCRYPT.
     * 
     * @param string $password Password mentah dari form input.
     * @return string Hasil hash password yang aman untuk disimpan ke database.
     */
    public static function hashPassword($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * Memverifikasi apakah password mentah cocok dengan hash yang ada di database.
     * 
     * @param string $password Password mentah yang diinput saat login.
     * @param string $hash Hash password yang diambil dari database.
     * @return bool True jika cocok, False jika salah.
     */
    public static function verifyPassword($password, $hash) {
        return password_verify($password, $hash);
    }
}
