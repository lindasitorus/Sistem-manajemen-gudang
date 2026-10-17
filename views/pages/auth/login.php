<?php 
// views/pages/auth/login.php
?>

<div class="row justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="col-md-4">
        <div class="card shadow border-0">
            <div class="card-header bg-dark text-white text-center py-3">
                <h5 class="mb-0 fw-bold">Masuk Sistem Gudang</h5>
            </div>
            <div class="card-body p-4">

                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger py-2 small" role="alert">
                        <?= htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>

                <form action="index.php?url=login" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email / Username</label>
                        <input type="email" name="email" class="form-control" placeholder="nama@email.com" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 py-2 fw-semibold">Masuk Ke Sistem</button>
                </form>

                <div class="text-center mt-3">
                    <small class="text-muted">Belum punya akun? <a href="index.php?url=register" class="text-decoration-none text-primary fw-semibold">Daftar di sini</a></small>
                </div>

            </div>
        </div>
    </div>
</div>