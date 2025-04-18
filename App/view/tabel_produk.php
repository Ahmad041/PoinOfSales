<?php
include 'component/header.php';
?>
<div class="container">
    <?php include 'component/sidebar.php' ?>
    <div class="main-content">
            <div class="page-header">
                <h1 class="page-title">Dashboard</h1>
            </div>
            <div class="filter">
            <?php include 'component/filterProduk.php' ?>
        </div>
        <div class="table">
            <?php include 'component/tableProduk.php' ?>
        </div>
    </div>
        
</div>
<?php include 'component/foother.php' ?>