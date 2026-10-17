<?php // views/components/footer.php ?>

</main> <!-- Penutup tag main container yang dibuka di header.php -->

<footer class="app-footer-component text-center py-4 mt-5 border-top bg-light">
    <div class="footer-content container">
        <p class="m-0">&copy; <?= date('Y'); ?> <strong>Gudangku App</strong>. Hak Cipta Dilindungi.</p>
        <p class="footer-version text-muted small m-0">Versi 1.0.0</p>
    </div>
</footer>

<!-- Menyisipkan Bootstrap JavaScript Bundle (wajib agar tampilan responsif/komponen berjalan lancar) -->
<script src="https://jsdelivr.net"></script>

</body>
</html>