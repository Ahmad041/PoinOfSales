<?php
include 'conn.php';



if (isset($_POST['tambah'])){
    $sql = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$_POST[nama_produk]', '$_POST[harga]', '$_POST[stok]');";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("Location: ../view/tabel_produk.php");
    }
}

if (isset($_POST['update'])) {
    $query = mysqli_query($conn, "UPDATE `produk` SET 
                        `nama_produk` = '$_POST[nama_produk]', 
                        `harga` = '$_POST[harga]', 
                        `stok` = '$_POST[stok]' WHERE `produk`.
                        `id_produk` = $_GET[id]");
    if ($query) {
        header("Location: ../view/tabel_produk.php");
    }

}

if (isset($_GET['id'])) {
    $query = mysqli_query($conn, "DELETE FROM produk WHERE `produk`.`id_produk` = $_GET[id]");
    if ($query) {
        header("Location: ../view/tabel_produk.php");
    }
}

?>