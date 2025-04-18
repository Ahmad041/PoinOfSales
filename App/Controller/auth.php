<?php
    function checkAdmin() {
        if (!isset($_SESSION['username']) || $_SESSION['level'] != 'admin') {
        header("Location: ../view/login.php");
        }
    };

    function checkKasir() {
        if (!isset($_SESSION['username']) || $_SESSION['level'] != 'kasir') {
        header("Location: ../view/login.php");
        }
    }

    function checkKasirAccess() {
        if (!isset($_SESSION['username'])) {
            header("Location: ../view/login.php");
        } else if ($_SESSION['level'] == 'kasir' && basename($_SERVER['PHP_SELF']) != 'kasir.php') {
            header("Location: ../view/kasir.php");
        }
    }
?>