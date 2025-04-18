<?php
include '../controller/conn.php';
session_start();
include '../controller/auth.php';
if (!isset($_SESSION['username']) || $_SESSION['level'] != 'kasir') {
    header("Location: ../view/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>