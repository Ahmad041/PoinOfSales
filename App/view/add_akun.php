<?php include 'component/header.php' ?>
<div class="container">
    <?php include 'component/sidebar.php' ?>
    <div class="main">
        <form class="input" action="../controller/crud_akun.php" method="post">
            <label for="nama_kasir">Nama Akun</label>
            <input id="nama_kasir" name="nama_kasir" type="text">
            <label for="level">Level</label>
            <select name="level" id="level">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <label for="email">Email</label>
            <input id="email" name="email" type="email">
            <label for="password">password</label>
            <input id="password" name="password" type="text">
            <label for="no_hp">No Hp</label>
            <input id="no_hp" name="no_hp" type="number">
            <label for="tgl">Tanggal Lahir</label>
            <input id="tgl" name="tgl" type="date">
            <label for="alamat">Alamat</label>
            <textarea width="100px" name="alamat" id="alamat"></textarea>
            <button type="submit" name="tambah">Submit</button>
        </form>
    </div>
</div>
<?php include 'component/foother.php' ?>