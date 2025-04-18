<?php

if (isset($_GET['error']) && $_GET['error'] == 1) {
    $warn = "Password atau email salah";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/login.css">
</head>

<body>
    <div class="login">
        <div class="form-control">
            <form action="../controller/login.php" method="post">
            <?php if (isset($warn)) { ?>
                <p><?= $warn ?></p>
                <?php } ?>
            <div class="form-group">
                <label for="user">Username :</label>
                <input id="user" name="user" type="text">
            </div>
            <div class="form-group">
                <label for="pass">Password :</label>
                <input id="pass" name="pass" type="password">
            </div>
            <button name="login" type="submit">Log in</button>
        </form>
        </div>
        
    </div>
</body>

</html>