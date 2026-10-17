case 'products':
    ?>
    <div class="my-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-dark m-0">Daftar Inventaris Barang</h3>
            <a href="index.php?url=products&action=create" class="btn btn-primary shadow-sm">+ Tambah Barang Baru</a>
        </div>
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="py-3 px-3">No</th>
                            <th class="py-3">SKU / Kode</th>
                            <th class="py-3">Nama Barang</th>
                            <th class="py-3">Supplier</th>
                            <th class="py-3">Mitra</th>
                            <th class="py-3">Stok Fisik</th>
                            <th class="py-3">Harga Satuan</th>
                            <th class="py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="text-center text-muted py-5">
                                <span class="fw-semibold">Belum ada data barang tersimpan di gudang.</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php