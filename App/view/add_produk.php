<?php include 'component/header.php' ?>
<div class="container">
    <?php include 'component/sidebar.php' ?>
    <div class="main">
        <form class="input" action="../controller/crud.php" method="post">
            <label for="nama_produk">Nama Produk</label>
            <input id="nama_produk" name="nama_produk" type="text">
            <label for="harga">Harga</label>
            <input id="harga" name="harga" type="number">
            <label for="stok">Stok</label>
            <input id="stok" name="stok" type="number">
            <button type="submit" name="tambah">Submit</button>
        </form>
    </div>
</div>
<?php include 'component/foother.php' ?>