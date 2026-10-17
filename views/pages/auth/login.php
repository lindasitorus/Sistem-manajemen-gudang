<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Manajemen Gudang</title>
    <!-- Hubungkan dengan Bootstrap 5 CDN -->
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center style="min-height: 100vh;">
        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4 font-weight-bold">Login Sistem</h3>
                    
                    <!-- Form Login mengarah ke file proses -->
                    <form action="proses-login.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username atau Email</label>
                            <input type="text" name="username" id="username" class="form-control" required placeholder="Masukkan username">
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required placeholder="Masukkan password">
                        </div>
                        
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" name="login" class="btn btn-primary">Masuk</button>
                        </div>
                    </form>
                    
                    <div class="text-center mt-3">
                        <small class="text-muted">Belum punya akun? <a href="register.php">Daftar disini</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://jsdelivr.net"></script>
</body>
</html>