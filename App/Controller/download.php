<?php
include 'conn.php';
// Ambil data dari database

$sql = "SELECT * FROM laporan_harian";
$result = mysqli_query($conn, $sql);

$fp = fopen('php://output', 'w');
fputcsv($fp, array("No.", "Total Penjualan", "Tanggal Penjualan", "Nama Kasir"));
$no =1;
while ($row = mysqli_fetch_assoc($result)) {
  fputcsv($fp, array($no++, $row['total_penjualan'],$row['tanggal_penjualan'], $row['nama_kasir']));
}

fclose($fp);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename= "Laporan_harian.csv"');
