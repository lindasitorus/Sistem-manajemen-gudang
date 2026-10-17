<?php
// session_start();

include './layouts/header.php';
include './layouts/navbar.php';

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Enkripsi password agar aman di database
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // TODO: Tambahkan query simpan ke database di sini
    // Contoh: $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password_hashed')";
    
    // Notifikasi sukses simulator
    $sukses = "Registrasi berhasil! Silakan login.";

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Manajemen Gudang</title>
    <!-- Menggunakan Bootstrap 5 yang mirip dengan tampilan form Simpan Gudang Anda sebelumnya -->
    <link href="https://jsdelivr.net" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card-register { max-width: 400px; margin: 80px auto; }
    </style>
</head>
<body>

<div class="container">
    <div class="card card-register shadow-sm border-0 rounded-3">
        <div class="card-body p-4">
            <h4 class="card-title text-center mb-4 fw-bold text-primary">Daftar Akun</h4>
            
            <?php if (isset($sukses)): ?>
                <div class="alert alert-success py-2 text-center" style="font-size: 14px;">
                    <?= $sukses; ?>
                </div>
            <?php endif; ?>

            <form action="" method="POST">
                <!-- Input Username -->
                <div class="mb-3">
                    <label for="username" class="form-label text-muted" style="font-size: 14px;">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
                </div>

                <!-- Input Email -->
                <div class="mb-3">
                    <label for="email" class="form-label text-muted" style="font-size: 14px;">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="nama@email.com" required>
                </div>

                <!-- Input Password -->
                <div class="mb-3">
                    <label for="password" class="form-label text-muted" style="font-size: 14px;">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                </div>

                <!-- Tombol Submit (Gaya tombol sukses hijau seperti di proyek Anda) -->
                <button type="submit" name="register" class="btn btn-success w-100 mt-2 py-2 fw-semibold">Daftar Sekarang</button>
            </form>

            <div class="text-center mt-3" style="font-size: 13px;">
                <span class="text-muted">Sudah punya akun?</span> <a href="login.php" class="text-decoration-none text-primary fw-medium">Login</a>
            </div>
        </div>
    </div>
</div>

<script src="https://jsdelivr.net"></script>
</body>
</html>