<?php
// Koneksi ke database

// Query untuk menghitung jumlah produk
$query = "SELECT COUNT(*) as total_produk FROM produk";
$result = mysqli_query($conn, $query);
$hasil = mysqli_fetch_assoc($result);
$total_produk = $hasil['total_produk'];

// Query untuk menghitung total stok
$query = "SELECT SUM(stok) as total_stok FROM produk";
$result = mysqli_query($conn, $query);
$hasil = mysqli_fetch_assoc($result);
$total_stok = $hasil['total_stok'];
?>

<div class="card">
    <h2>Informasi Produk</h2>
    <p>Jumlah Produk: <?= $total_produk ?></p>
    <p>Total Stok: <?= $total_stok ?></p>
</div>