<div class="sidebar">
    <div class="logo-container">
        <div class="logo">POS System</div>
    </div>
    <a href="dashboard.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
        <i>📊</i> Dashboard
    </a>
    <a href="Kasir.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'kasir.php' ? 'active' : '' ?>">
        <i>🛒</i> Kasir
    </a>
    <a href="tabel_produk.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'tabel_produk.php' ? 'active' : '' ?>">
        <i>📦</i> Tabel Produk
    </a>
    <a href="tabel_akun.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'tabel_akun.php' ? 'active' : '' ?>">
        <i>👥</i> Tabel Akun
    </a>
    <a href="laporan_harian.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'laporan_harian.php' ? 'active' : '' ?>">
        <i>📄</i> Laporan Harian
    </a>
    <a href="laporan_bulanan.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'laporan_bulanan.php' ? 'active' : '' ?>">
        <i>📊</i> Laporan Bulanan
    </a>
    <a href="profile.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'profile.php' ? 'active' : '' ?>">
        <i>👤</i> Profile
    </a>
    <a href="../controller/logout.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'logout.php' ? 'active' : '' ?>">
        <i>🔐</i> Log Out
    </a>
</div>

