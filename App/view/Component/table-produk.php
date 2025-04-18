<?php
// Query untuk menampilkan data produk
if (isset($_GET['kategori']) && isset($_GET['search'])) {
    $kategori = $_GET['kategori'];
    $search = $_GET['search'];

    if ($kategori != "" && $search != "") {
        $query = "SELECT * FROM produk WHERE kategori = '$kategori' AND (id_produk LIKE '%$search%' OR nama_produk LIKE '%$search%')";
    } elseif ($kategori != "") {
        $query = "SELECT * FROM produk WHERE kategori = '$kategori'";
    } elseif ($search != "") {
        $query = "SELECT * FROM produk WHERE id_produk LIKE '%$search%' OR nama_produk LIKE '%$search%'";
    } else {
        $query = "SELECT * FROM produk";
    }
} else {
    $query = "SELECT * FROM produk";
}

$result = mysqli_query($conn, $query);
?>
<div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($query_produk)) { ?>
                        <tr>
                            <td><?= $row['id_produk'] ?></td>
                            <td><?= $row['nama_produk'] ?></td>
                            <td><?= $row['kategori'] ?></td>
                            <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                            <td><?= $row['stok'] ?></td>
                            <td class="action-buttons">
                                <button class="btn-edit">Edit</button>
                                <button class="btn-delete">Hapus</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>