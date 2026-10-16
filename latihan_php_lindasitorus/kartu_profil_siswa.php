<?php
// 1. Data disimpan di dalam variabel
$nama = "Tiur Maylinda brsitorus";
$kelas = "RK 5";
$jurusan = "Komputerisasi Akuntansi";
$umur = 27;
$nilai = 82;

// Bonus: Menentukan status berdasarkan nilai
if ($nilai >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}

// 2. Output program dengan tanda =====
echo "=================================<br>";
echo "     KARTU PROFIL SISWA          <br>"; 
echo "=================================<br>";

// Echo ke-2 & menggunakan operator titik (.) untuk menggabungkan variabel
echo "Nama : " . $nama . "<br>";
echo "Kelas : " . $kelas . "<br>";

// Printf ke-1 & menggunakan placeholder %s untuk string
printf("jurusan : %s<br>", $jurusan);

//Printf ke-2 & menggunakan placeholder %d untuk angka serta ada kata 'tahun'
printf("Umur : %d tahun<br>", $umur);

// Menampilkan nilai dan status bonus
echo "Nilai : " . $nilai . "<br>";
echo "Status : " . $status . "<br>";
echo "=================================<br>";
?>