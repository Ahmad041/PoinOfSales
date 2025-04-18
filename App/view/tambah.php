<?php
include '../Controller/conn.php';
include '../Controller/crud.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'Component/header.php'; ?>

    <div class="glass-container" style="max-width: 600px; margin: 50px auto;">
        <h2 style="margin-bottom: 20px;">Tambah Produk</h2>
        
        <form action="process_tambah.php" method="POST">
            <div style="margin-bottom: 15px;">
                <label for="nama_produk" style="display: block; margin-bottom: 5px;">Nama Produk</label>
                <input type="text" id="nama_produk" name="nama_produk" class="macos-input" required>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label for="harga" style="display: block; margin-bottom: 5px;">Harga</label>
                <input type="number" id="harga" name="harga" class="macos-input" required>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label for="stok" style="display: block; margin-bottom: 5px;">Stok</label>
                <input type="number" id="stok" name="stok" class="macos-input" required>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label for="kategori" style="display: block; margin-bottom: 5px;">Kategori</label>
                <select id="kategori" name="kategori" class="macos-input" required>
                    <option value="">Pilih Kategori</option>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                    <option value="snack">Snack</option>
                </select>
            </div>
            
            <div style="display: flex; gap: 10px;">
                <button type="submit" class="macos-button">Simpan</button>
                <a href="admin.php" class="macos-button" style="background: #6c757d;">Batal</a>
            </div>
        </form>
    </div>

    <?php include 'Component/footer.php'; ?>
</body>

</html>