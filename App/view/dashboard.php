<?php
include 'component/header.php';

// Query untuk data statistik
$query = mysqli_query($conn, "SELECT COUNT(*) as jumlah_produk FROM produk");
$result = mysqli_fetch_assoc($query);

$query_total_harian = mysqli_query($conn, "SELECT SUM(total_penjualan) AS total FROM laporan_harian");
$row_total_harian = mysqli_fetch_assoc($query_total_harian);

$query_total_bulanan = mysqli_query($conn, "SELECT SUM(total_penjualan) AS total FROM laporan_bulanan");
$row_total_bulanan = mysqli_fetch_assoc($query_total_bulanan);

// Query untuk tabel produk
$query_produk = mysqli_query($conn, "SELECT * FROM produk ");
?>
    <div class="container">
        <!-- Sidebar -->
        <?php include 'component/sidebar.php'?>

        <!-- Main Content -->
        <div class="main-content">
            <div class="page-header">
                <h1 class="page-title">Dashboard</h1>
            </div>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-title">Jumlah Produk</div>
                    <div class="stat-value"><?= $result['jumlah_produk'] ?></div>
                </div>
                <div class="stat-card">
                    <div class="stat-title">Total Hari Ini</div>
                    <div class="stat-value">Rp <?= number_format($row_total_harian['total'] ?? 0, 0, ',', '.') ?></div>
                </div>
                <div class="stat-card">
                    <div class="stat-title">Total Bulan Ini</div>
                    <div class="stat-value">Rp <?= number_format($row_total_bulanan['total'] ?? 0, 0, ',', '.') ?></div>
                </div>
            </div>

            <!-- Search and Filters -->
            <?php include 'component/filterProduk.php' ?>

            <!-- Products Table -->
            <?php include 'component/tableProduk.php'?>
        </div>
    </div>

    <?php include 'component/foother.php'; ?>
</body>
</html>