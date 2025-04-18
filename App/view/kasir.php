    <?php include 'Component/header.php'; ?>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM penjualan");
    ?>

    <div class="glass-contain">
        <?php include 'Component/sidebar.php'; ?>
        <div class="glass-container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
            <div class="glass-container" style="margin: 0;">
                <h3 style="margin-bottom: 15px;">Daftar Produk</h3>
                <div style="margin-bottom: 15px;">
                    <?php include 'Component/filterProduk.php' ?>
                </div>
                <div style="max-height: 400px; overflow-y: auto;">
                    <?php include 'Component/tableproduk.php' ?>
                </div>
            </div>

            <div class="glass-container" style="margin: 0;">
                <h3 style="margin-bottom: 15px;">Keranjang</h3>
                <div style="max-height: 300px; overflow-y: auto; margin-bottom: 20px;">
                    <table class="macos-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Produk</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            while ($row = mysqli_fetch_assoc($query)) {
                                $produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$row[id_penjualan]'");
                                $row_produk = mysqli_fetch_assoc($produk);
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row_produk['nama_produk'] ?></td>
                                    <td><?= number_format($row['total_harga']) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div style="margin-bottom: 15px;">
                    <?php
                    $query = mysqli_query($conn, "SELECT SUM(total_harga) AS total FROM penjualan");
                    $row = mysqli_fetch_assoc($query);
                    ?>
                    <h4>Total: Rp <?= number_format($row['total']) ?></h4>
                    <?php
                    if ($row['total'] > 10000) {
                        $diskon = "10%";
                        $total = $row['total'] * 0.1;

                        echo "<h4> Diskon Yang didapat  $diskon </h4>";
                        echo "<h5>Total Setelah diskon: Rp " . number_format($total)  . "</h5>";
                    }
                    ?>
                </div>
                <form action="" method="post">
                    <label for="bayar">Bayar : Rp. </label>
                    <input id="bayar" style="border:none; border-bottom: 2px solid white; background-color: transparent; outline: none; color: white;" type="number" name="bayar">
                    <button class="macos-button" style="margin-top:10px; width: 100%;" name="bayar_in">Proses Pembayaran</button>
                </form>

                <?php
        if (isset($_POST['bayar_in'])) {
            $kembalian = $_POST['bayar'] - $total ;
            if ($kembalian < 0) {
                echo "uang kurang";
            }
            else{
                echo "pembayaran berhasil";
                echo "<h5>Kembalian :$kembalian </h5>";
                echo '<form action="../controller/struk.php" method="get">';
                echo '<input value="'. $kembalian . '" name="kembalian" type="hidden">';
                echo '<button type="submit">Print</button>';
                echo '</form>';
            }
        }
        ?>
            </div>
            <div class="glass-container" style="margin: 0;">
                <?php include 'Component/inputan.php'; ?>
            </div>
        </div>
    </div>
    </div>

    

    <?php include 'Component/foother.php'; ?>