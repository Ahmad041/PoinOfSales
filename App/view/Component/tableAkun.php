<?php
if (isset($_GET['level']) && isset($_GET['search'])) {
    if ($_GET['level'] != '' && $_GET['search'] != '') {
        $filter = "SELECT * FROM akun WHERE level = '$_GET[level]' AND nama_kasir LIKE '%$_GET[search]%'";
    }
    elseif ($_GET['level'] != '') {
        $filter = "SELECT * FROM akun WHERE level = '$_GET[level]'";
    }
    elseif ($_GET['search'] != '') {
        $filter = "SELECT * FROM akun WHERE nama_kasir LIKE '%$_GET[search]%'";
    } else {
        $filter = "SELECT * FROM akun";
    }
} else {
    $filter = "SELECT * FROM akun";
}
$sql = mysqli_query($conn, $filter);
?>

<table class="table-container">
    <thead>
        <tr>
            <th>No.</th>
            <th>Id User</th>
            <th>Nama User</th>
            <th>Level</th>
            <th>Email</th>
            <th>Password</th>
            <th>No Hp</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Kondisi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        while ($row = mysqli_fetch_assoc($sql)) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['id_user'] ?></td>
                <td><?= $row['nama_kasir'] ?></td>
                <td><?= $row['level'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['password'] ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td><?= $row['tgl_lahir'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td>
                    <a href="update_akun.php?id=<?= $row['id_user'] ?>">Edit</a>
                    <a href="../controller/crud_akun.php?id=<?= $row['id_user'] ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>