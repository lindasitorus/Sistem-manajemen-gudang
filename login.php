<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>LOGIN - SISTEM MANAJEMEN GUDANG</title>
</head>
<body>
    <center>
        <h3>SISTEM MANAJEMEN GUDANG</h3>
        
        <!-- Navigasi disamakan dengan halaman utama -->
        <nav>
            <a href="index.php">BERANDA</a>
            <a href="login.php">LOGIN</a>
            <a href="logout.php">LOGOUT</a>
        </nav>

        <hr style="border: 1px solid #eef2f5; margin-bottom: 25px; width: 100%;">

        <!-- Form Login Utama -->
        <div style="max-width: 350px; text-align: left; padding: 20px; border: 1px solid #e4e8f0; border-radius: 12px; margin-bottom: 30px; background-color: #fafbfc;">
            <h4 style="text-align: center; color: #2c3e50; margin-top: 0; margin-bottom: 20px; letter-spacing: 1px;">MASUK KE SISTEM</h4>
            
            <form action="index.php" method="POST">
                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #5a6a85; margin-bottom: 5px;">Username / ID Operator:</label>
                    <input type="text" name="username" placeholder="Masukkan username atau scan ID..." required autofocus
                        style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; font-size: 14px; box-sizing: border-box;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #5a6a85; margin-bottom: 5px;">Password:</label>
                    <input type="password" name="password" placeholder="••••••••" required
                        style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; font-size: 14px; box-sizing: border-box;">
                </div>

                <button type="submit" 
                    style="width: 100%; padding: 12px; background-color: #3498db; color: white; border: none; border-radius: 8px; font-weight: bold; font-size: 14px; cursor: pointer; transition: background 0.3s ease;">
                    MASUK SEKARANG
                </button>
            </form>
        </div>

        <p>Gunakan akun operator gudang yang valid untuk mengelola stok opname.</p>

        <!-- Footer disamakan persis agar konsisten -->
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
