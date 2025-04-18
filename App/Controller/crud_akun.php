<?php
include 'conn.php';



if (isset($_POST['tambah'])){
    $sql = "INSERT INTO akun (nama_kasir, level, email, password, no_hp, tgl_lahir, alamat) VALUES 
    ('$_POST[nama_kasir]', 
    '$_POST[level]', 
    '$_POST[email]', 
    '$_POST[password]', 
    '$_POST[no_hp]', 
    '$_POST[tgl]', 
    '$_POST[alamat]');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../view/tabel_akun.php");
    }
}

if (isset($_POST['update'])) {
    $query = mysqli_query($conn, "UPDATE `akun` SET 
                        nama_kasir = '$_POST[nama_kasir]', 
                        level = '$_POST[level]', 
                        email = '$_POST[email]', 
                        password = '$_POST[password]', 
                        no_hp = '$_POST[no_hp]', 
                        tgl_lahir = '$_POST[tgl]', 
                        alamat = '$_POST[alamat]' 
                        WHERE `produk`.`id_produk` = $_GET[id]");
    if ($query) {
        header("Location: ../view/tabel_akun.php");
    }

}

if (isset($_GET['id'])) {
    $query = mysqli_query($conn, "DELETE FROM akun WHERE `akun`.`id_user` = $_GET[id]");
    if ($query) {
        header("Location: ../view/tabel_akun.php");
    }
}

?>