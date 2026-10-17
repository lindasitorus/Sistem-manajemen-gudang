<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? htmlspecialchars($title) : 'Sistem Manajemen Gudang'; ?></title>
    <!-- Hubungkan ke berkas gaya CSS utama aplikasi -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="app-container">
        <!-- 1. MEMANGGIL KOMPONEN SIDEBAR / NAVBAR -->
        <?php include_once __DIR__ . '/../components/navbar.php'; ?>

        <div class="main-layout">
            <!-- 2. MEMANGGIL KOMPONEN HEADER -->
            <?php include_once __DIR__ . '/../components/header.php'; ?>

            <!-- 3. KONTEN UTAMA DINAMIS -->
            <main class="content-body">
                <?php 
                // Jika controller mengirimkan path file halaman spesifik ($viewPage), muat filenya.
                if (isset($viewPage) && file_exists($viewPage)) {
                    include_once $viewPage;
                } else {
                    // Fallback jika memanggil langsung dari DashboardController (atau rute default)
                    include_once __DIR__ . '/../pages/dashboard.php';
                }
                ?>
            </main>

            <!-- 4. MEMANGGIL KOMPONEN FOOTER -->
            <?php include_once __DIR__ . '/../components/footer.php'; ?>
        </div>
    </div>

    <!-- Hubungkan ke berkas JavaScript utama aplikasi -->
    <script src="js/app.js"></script>
</body>
</html>
