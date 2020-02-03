<?php
    include_once('Model/config.php');
    $db = new Database();
    $db->connect();

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    }
    require_once "./View/login/login.php";