<?php
session_start();
if (!isset($_SESSION['logged']))
    $_SESSION['logged'] = false;

if (isset($_POST["logout"])) {
    // $_SESSION['logged'] = false;
    session_unset();
    session_destroy();
    header("Location: index.php");
    die();
}
if (isset($_POST["login"])) {
$_SESSION['logged'] = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="text-align: center;">

    <form method="POST">
        <?php
        if ($_SESSION['logged']) {
        ?>
            <button type="submit" name="logout">Logout</button>
        <?php
        } else {
        ?>
            <button type="submit" name="login">Login</button>
        <?php
        }
        ?>
    </form>
</body>

</html>