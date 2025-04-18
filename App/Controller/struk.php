<?php
include 'conn.php';
$query = mysqli_query($conn, "SELECT * FROM penjualan"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .struk{
            margin-left: auto;
            margin-right: auto;
            background-color: whitesmoke;
            width: 20%;
            height: 100vh;
        }
        .data{
            display: flex;
            flex-direction: row;
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="struk">
        <div class="title">
            <h1>Toko RPL 3</h1>
            <h3>Jl. Kenangan rt07/026</h3>
            =========================
        </div>
        <?php
        while ($row = mysqli_fetch_assoc($query)) {
            $produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$row[id_penjualan]'");
            $row_produk = mysqli_fetch_assoc($produk);
            ?>
            <div class="data">
                <p> <?= $row_produk['nama_produk']. " " . ":" . "  " . number_format($row['total_harga']) ?></p>
            </div>
        <?php } ?>
        <div class="title">
            =========================
        </div>
        <?php
        $query = mysqli_query($conn, "SELECT SUM(total_harga) AS total FROM penjualan");
        $row = mysqli_fetch_assoc($query);
        ?>
        <div class="data">
            <p>Total </p>
            <p> : </p>
            <p><?=" ". number_format($row['total']) ?></p>
        </div>
        <?php
        if ($row['total'] > 10000) {
            $diskon = "10%";
            $total = $row['total'] * 0.1;
            echo '<div class= "data">';
            echo "<p>Diskon Yang didapat </p>";
            echo "<p> : </p>";
            echo "<p>$diskon </p>";
            echo '</div>';
            echo '<div class= "data">';
            echo "<p>Total  Setelah diskon </p><p> : </p><p>" . "  " . number_format($total)  . "</p>";
            echo '</div>';
            echo "<h5>Kembalian : Rp. " . number_format($_GET['kembalian']) . "</h5>";
            echo '</div>';
        }
        ?>
    </div>

</body>

</html>