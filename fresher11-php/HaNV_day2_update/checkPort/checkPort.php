<?php
    $checkPort = $_SERVER['SERVER_PORT'];
    if($checkPort == 80){
        echo "trang được gọi từ http";
    }
    elseif($checkPort == 443){
        echo "trang được gọi từ https";
    }
    else{
        echo "trang không tồn tại";
    }