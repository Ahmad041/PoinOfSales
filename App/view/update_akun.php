<?php include 'component/header.php' ?>
<?php
$sql = "SELECT * FROM akun WHERE id_user = '$_GET[id]'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<div class="container">
    <?php include 'component/sidebar.php' ?>
    <div class="main">
        <form class="input" action="../controller/crud_akun?id=<?= $row['id_user'] ?>.php" method="post">
            <label for="nama_kasir">Nama Akun</label>
            <input placeholder="<?= $row['nama_kasir'] ?>" id="nama_kasir" name="nama_kasir" type="text">
            <label for="level">Level</label>
            <select name="level" id="level">
                <option value="admin"<?php ($row['level'] == 'admin') ? 'selected' : '' ?> >Admin</option>
                <option value="user"<?php ($row['level'] == 'user') ? 'selected' : '' ?> >User</option>
            </select>
            <label for="email">Email</label>
            <input placeholder="<?= $row['email'] ?>" id="email" name="email" type="email">
            <label for="password">password</label>
            <input placeholder="<?= $row['password'] ?>" id="password" name="password" type="text">
            <label for="no_hp">No Hp</label>
            <input placeholder="<?= $row['no_hp'] ?>" id="no_hp" name="no_hp" type="number">
            <label for="tgl">Tanggal Lahir</label>
            <input placeholder="<?= $row['tgl_lahir'] ?>" id="tgl" name="tgl" type="number">
            <label for="alamat">Alamat</label>
            <textarea placeholder="<?= $row['alamat'] ?>" name="alamat" id="alamat"></textarea>
            <button type="submit" name="tambah">Submit</button>
        </form>
    </div>
</div>
<?php include 'component/foother.php' ?>