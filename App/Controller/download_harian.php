<?php

header('Content-Type: text/csv');
header('Content-Disposition: attachment; Filename = "laporan_harian.csv"');

include 'conn.php';
$query = mysqli_query($conn, "SELECT * FROM laporan_harian");

$no = 1;

$fp = fopen('php://output', 'w');


fputcsv($fp,array("No", "Total Penjualan", "TanggalPenjualan", "Nama kasir"));


while ($row = mysqli_fetch_assoc($query)) {
    fputcsv($fp, array($no++, $row['total_penjualan'], $row['tanggal_penjualan'], $row['nama_kasir']));
}


fclose( $fp);



?>