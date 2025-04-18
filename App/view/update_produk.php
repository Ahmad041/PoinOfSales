<?php include 'component/header.php';?>
<?php
$sql = "SELECT * FROM produk WHERE id_produk = '$_GET[id]'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);



?>
<div class="container">
    <?php $row ?>
    <?php include 'component/sidebar.php' ?>
    <div class="main">
        <form class="input" action="../controller/crud.php?id=<?= $row['id_produk'] ?>"  method="POST">
            <label for="nama_produk">Nama Produk</label>
            <input placeholder="<?= $row['nama_produk']?>" id="nama_produk" name="nama_produk" type="text">
            <label for="harga">Harga</label>
            <input placeholder="<?= $row['harga']?>" id="harga" name="harga" type="number">
            <label for="stok">Stok</label>
            <input placeholder="<?= $row['stok']?>" id="stok" name="stok" type="number">
            <button name="update" type="submit">Update</button>
        </form>
    </div>
</div>
<?php include 'component/foother.php' ?>