<?php
include 'conn.php';
session_start();

$quan =$_POST['quantity'];


if (isset($_POST['input'])) {

    $sql_produk = "SELECT * FROM produk WHERE id_produk = '$_POST[id_produk]'";
    $query_produk = mysqli_query($conn, $sql_produk);

    if(mysqli_num_rows($query_produk) == 1){
        $result = mysqli_fetch_assoc($query_produk);   
        $total = $_POST['quantity'] * $result['harga'];

            if ($result['stok'] >= $_POST['quantity']  ) {
                    $result_stok = mysqli_query($conn, "INSERT INTO penjualan (id_penjualan, total_harga) VALUES ('$_POST[id_produk]', '$total')");
                    if($result_stok)  {
                    $sql_kurang = "UPDATE `produk` SET `stok` = stok - '$_POST[quantity]' WHERE `produk`.`id_produk` = '$_POST[id_produk]'";
                    $result_kurang = mysqli_query($conn, $sql_kurang);
                    header("Location: ../view/kasir.php");
                }
                else {
                    echo "Gagal kirim";
                }
            }
            else {
            echo "stok tidak cukup";
            }

        
    }
    else {
        echo "Id salah ";
    }

    
}
?>