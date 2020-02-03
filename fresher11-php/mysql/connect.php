<?php
    $user = 'root';
    $password = '';
    $database = 'testPHP';
    $server = 'localhost';

    $conn = new mysqli($server, $user, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";