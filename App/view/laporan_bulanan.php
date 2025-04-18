<?php include 'component/header.php' ?>
<?php

$query = mysqli_query($conn, "SELECT * FROM laporan_bulanan");

?>
<div class="container">
    <?php include 'component/sidebar.php' ?>
    <div class="main-content">
        <table class="table-container">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Tanggal penjualan</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                while ($row = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['total_penjualan'] ?></td>
                        <td><?= $row['tanggal_penjualan'] ?></td>
                        <td><?= $row['nama_kasir'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php
        $query = mysqli_query($conn, "SELECT SUM(total_penjualan) AS total FROM laporan_bulanan");
        $row = mysqli_fetch_assoc($query);
        ?>

        <h1>Total : <?= $row['total'] ?></h1>
        <div class="download">
            <a class="pdf" href="../controller/laporan_harian.php">Print PDF</a>
            <a class="excel" href="../controller/download_harian.php">Excel</a>
        </div>
    </div>

</div>
<?php include 'component/foother.php' ?>