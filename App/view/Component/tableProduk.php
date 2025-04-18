<?php
if (isset($_GET['kategori']) && isset($_GET['search'])) {
    if ($_GET['kategori'] != '' && $_GET['search'] != '') {
        $filter = "SELECT * FROM produk WHERE kategori = '$_GET[kategori]' AND (nama_produk LIKE %$_GET[search]%) ";
    }
    if ($_GET['kategori'] != '') {
        $filter = "SELECT * FROM produk WHERE kategori = '$_GET[kategori]'";
    }
    if ($_GET['search'] != '') {
        $filter = "SELECT * FROM produk WHERE nama_produk LIKE %$_GET[search]%";
    }
    else{
        $filter = "SELECT * FROM produk";
    }
} else {
    $filter = "SELECT * FROM produk";
}
$sql = mysqli_query($conn, $filter);
?>

<table class="table-container">
    <thead>
        <tr>
            <th>No.</th>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>kategori Produk</th>
            <th>Harga Produk</th>
            <th>Stok Produk</th>
            <th>Kondisi</th>
            <th>Fitur</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        while ($row = mysqli_fetch_assoc($sql)) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['id_produk'] ?></td>
                <td><?= $row['nama_produk'] ?></td>
                <td><?= $row['kategori'] ?></td>
                <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                <td><?= $row['stok'] ?></td>
                <td><?= $row['status'] ?></td>
                <td style="display: flex;flex-direction:column;" >
                    <a class="btn-edit href=" update_produk.php?id=<?= $row['id_produk'] ?>">Edit</a>
                    <a class="btn-delete" href="../controller/crud.php?id=<?= $row['id_produk'] ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>