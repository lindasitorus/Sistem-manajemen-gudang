<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>LOGOUT - SISTEM MANAJEMEN GUDANG</title>
    <!-- Otomatis mengarahkan kembali ke halaman utama/login setelah 5 detik -->
    <meta http-equiv="refresh" content="5;url=index.php">
</head>
<body>
    <center>
        <h3>SISTEM MANAJEMEN GUDANG</h3>
        
        <!-- Navigasi disamakan agar tetap konsisten -->
        <nav>
            <a href="index.php">BERANDA</a>
            <a href="login.php">LOGIN</a>
            <a href="logout.php">LOGOUT</a>
        </nav>

        <hr style="border: 1px solid #eef2f5; margin-bottom: 25px; width: 100%;">

        <!-- Kotak Informasi Status Logout -->
        <div style="max-width: 400px; padding: 30px 20px; border: 1px solid #f5c6cb; border-radius: 12px; margin-bottom: 30px; background-color: #fff3cd; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <h4 style="color: #856404; margin-top: 0; margin-bottom: 15px; letter-spacing: 1px;">ANDA TELAH KELUAR ASAL SISTEM</h4>
            <p style="color: #856404; font-size: 14px; margin-bottom: 20px;">Sesi operasional manajemen gudang Anda telah ditutup dengan aman.</p>
            
            <!-- Tombol Manual untuk Masuk Kembali -->
            <a href="login.html" 
               style="text-decoration: none; display: inline-block; padding: 10px 20px; background-color: #2c3e50; color: white; border-radius: 8px; font-weight: bold; font-size: 13px; transition: background 0.3s ease;">
                MASUK KEMBALI
            </a>
        </div>

        <p>Sistem akan mengalihkan Anda secara otomatis ke halaman beranda dalam 5 detik.</p>
        <p><b><i>Terima kasih atas kerja keras Anda hari ini</i></b></p>

        <!-- Footer disamakan persis -->
        <footer>
            <p style="font-size: 11px;">@copy_right_website saya 2026</p>
            <p>
                <a href="instagram.php">instagram: @Maylinda sitorus</a>
                <a href="facebook.php">facebook: Maylinda sitorus</a>
            </p>
        </footer>
    </center>
</body>
</html>
