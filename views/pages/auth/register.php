<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Sistem Manajemen Gudang</title>
    <!-- Hubungkan ke CSS utama di folder public -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth-body">

    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h2>Gudangku App</h2>
                <p>Buat akun baru untuk mulai mengelola gudang</p>
            </div>

            <!-- Menampilkan pesan error jika proses registrasi di AuthController gagal -->
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger">
                    <strong>Gagal!</strong> <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form action="index.php?url=register" method="POST" class="auth-form">
                <div class="form-group">
                    <label for="username">Nama Pengguna (Username)</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        placeholder="Masukkan nama pengguna" 
                        required 
                        autocomplete="username"
                    >
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="contoh@gudang.com" 
                        required 
                        autocomplete="email"
                    >
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Buat kata sandi minimal 6 karakter" 
                        required
                    >
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-auth">Daftar Sekarang</button>
                </div>
            </form>

            <div class="auth-footer">
                <p>Sudah memiliki akun? <a href="index.php?url=login">Masuk di sini</a></p>
            </div>
        </div>
    </div>

</body>
</html>
