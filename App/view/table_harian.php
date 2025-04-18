<?php
include '../Controller/conn.php';

$sql = "SELECT * FROM laporan_harian";
$result = mysqli_query($conn, $sql);


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

<div class="glass-container">
    <h2 style="margin-bottom: 20px;">Laporan Harian</h2>
    
    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <div style="display: flex; gap: 10px;">
            <input type="date" class="macos-input" style="width: auto;">
            <button class="macos-button">Tampilkan</button>
        </div>
        <button class="macos-button">Export PDF</button>
    </div>

    <div class="glass-container" style="margin: 0 0 20px 0;">
        <h3 style="margin-bottom: 15px;">Ringkasan</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
            <div>
                <p>Total Transaksi</p>
                <h3>0</h3>
            </div>
            <div>
                <p>Total Penjualan</p>
                <h3>Rp 0</h3>
            </div>
            <div>
                <p>Produk Terlaris</p>
                <h3>-</h3>
            </div>
        </div>
    </div>

    <div style="overflow-x: auto;">
        <table class="macos-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Transaksi</th>
                    <th>Waktu</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Kasir</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['id_transaksi'] ?></td>
                    <td><?= $row['waktu'] ?></td>
                    <td><?= $row['produk'] ?></td>
                    <td><?= $row['jumlah'] ?></td>
                    <td><?= $row['total'] ?></td>
                    <td><?= $row['kasir'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'Component/footer.php'; ?>
</body>
</html>