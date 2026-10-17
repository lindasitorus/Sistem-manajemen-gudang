<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier - Manajemen Gudang</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow border-0">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold text-dark m-0">Daftar Supplier Pemasok</h3>
                <a href="#" class="btn btn-primary btn-sm">+ Tambah Supplier</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" width="5%">No</th>
                            <th scope="col">Nama Supplier</th>
                            <th scope="col">Kontak / HP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh Data Statis (Nanti bisa dihubungkan ke Database) -->
                        <tr>
                            <td>1</td>
                            <td class="fw-semibold">PT. Distribusi Jaya</td>
                            <td>0812-3456-7890</td>
                            <td>Jl. Merdeka No. 10, Jakarta</td>
                            <td>
                                <button class="btn btn-warning btn-sm text-white">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="fw-semibold">CV. Sumber Makmur</td>
                            <td>0857-1122-3344</td>
                            <td>Jl. Sudirman No. 45, Medan</td>
                            <td>
                                <button class="btn btn-warning btn-sm text-white">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://jsdelivr.net"></script>
</body>
</html>