<?php
include 'component/header.php';
?>
<div class="container">
    <?php include 'component/sidebar.php' ?>
        <div class="main">
            <h1>Tabel Akun</h1>
            <div class="filter">
                <?php include 'component/filterAkun.php' ?>
            </div>
            <div class="table">
                <?php include './component/tableAkun.php' ?>
            </div>
        </div>
</div>
<?php include 'component/foother.php' ?>
    
