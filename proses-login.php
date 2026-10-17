<?php
// 1. Memulai session untuk menyimpan tanda kalau user sudah login
session_start();

// 2. Koneksi ke database Anda (Sesuaikan nama DB jika berbeda)
$host     = "localhost";
$db_user  = "root";
$db_pass  = "";
$db_name  = "db_manajemen_gudang";

$koneksi = mysqli_connect($host, $db_user, $db_pass, $db_name);

// Cek apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// 3. Proses ketika tombol 'Masuk' di klik
if (isset($_POST['login'])) {
    // Ambil data input dan bersihkan dari karakter berbahaya
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];

    // 4. Cari user di tabel berdasarkan username ATAU email
    $query = "SELECT * FROM users WHERE username = '$username' OR email = '$username'";
    $result = mysqli_query($koneksi, $query);

    // Cek apakah username/email ditemukan
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // 5. VERIFIKASI PASSWORD BCRYPT (Sesuai Syarat Tugas)
        // Fungsi ini mencocokkan password ketikan dengan kode $2y$ di DB Anda
        if (password_verify($password, $row['password'])) {
            
            // Set session jika password benar
            $_SESSION['sudah_login'] = true;
            $_SESSION['user_id']     = $row['id'];
            $_SESSION['username']    = $row['username'];

            // Alihkan langsung ke halaman Dashboard utama
            echo "<script>
                    alert('Login Berhasil! Selamat Datang " . $row['username'] . "');
                    window.location.href = 'views/pages/dashboard.php';
                  </form>";
            exit;
        }
    }
    
    // 6. Jika username tidak ada atau password BCRYPT tidak cocok
    echo "<script>
            alert('Gagal Login! Username atau Password Salah.');
            window.location.href = 'views/pages/auth/login.php';
          </script>";
}
?>