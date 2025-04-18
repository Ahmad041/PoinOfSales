<?php
include 'conn.php';
if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM akun WHERE nama_kasir = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        //Session
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $user['level']; 
        
        if ($_SESSION['level'] == 'admin') {
            header("Location: ../view/dashboard.php");
        } else {
            header("Location: ../view/transaksi.php");
        }
        exit();
    } else {
        header("Location: ../view/login.php?error=1");
        exit();
    }
}


?>