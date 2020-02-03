<?php
    if (isset($_COOKIE['name']) && (isset($_COOKIE['password']))) {
        echo $_COOKIE['name'] . $_COOKIE['password'];
    } else {
        echo 'cookie khong ton tai';
    }
?>

<a href="delete.php">delete cookie</a>
<a href="login.php">login</a>
