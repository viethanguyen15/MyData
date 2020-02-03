<?php
    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    } else {
        $controller = '';
    }

    switch ($controller) {
        case 'category':
            require_once
            break;
        
        default:
            # code...
            break;
    }