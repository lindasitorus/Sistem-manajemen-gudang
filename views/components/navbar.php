<?php
// views/components/navbar.php
$current_url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'dashboard';
?>
<aside class="app-sidebar">
    <div class="sidebar-brand">
        <h2>Gudangku App</h2>
    </div>
    
    <nav class="sidebar-menu">
        <ul>
            <!-- Menu Dashboard -->
            <li class="<?= ($current_url == 'dashboard') ? 'active' : '' ?>">
                <a href="index.php?url=dashboard">
                    <span class="icon">📊</span> Ringkasan Dashboard
                </a>
            </li>
            
            <!-- Menu Manajemen Barang -->
            <li class="<?= ($current_url == 'products') ? 'active' : '' ?>">
                <a href="index.php?url=products">
                    <span class="icon">📦</span> Manajemen Barang
                </a>
            </li>
            
            <!-- Menu Manajemen Supplier -->
            <li class="<?= ($current_url == 'suppliers') ? 'active' : '' ?>">
                <a href="index.php?url=suppliers">
                    <span class="icon">🤝</span> Data Supplier
                </a>
            </li>
            
            <!-- Menu Mutasi & Stok -->
            <li class="<?= ($current_url == 'stocks') ? 'active' : '' ?>">
                <a href="index.php?url=stocks">
                    <span class="icon">🔄</span> Mutasi & Stok
                </a>
            </li>
        </ul>
    </nav>
</aside>
