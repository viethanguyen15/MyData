<?php
    if (isset($_COOKIE['name']) && isset($_COOKIE['password'])) {
        setcookie('name', $_POST['name'], time() - 60);
        setcookie('password', $_POST['password'], time() - 60);
        header('location: home.php');
    }
   