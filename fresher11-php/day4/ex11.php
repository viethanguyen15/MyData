<?php
    //kiêm tra chuôi chữ hoa  hay chữ thường
    $str = "hoc php co ban";
    if (ctype_upper($str)) {
        echo "The string $str consists of all uppercase letters";
    }
    else{
        echo "The string $str does not consist of all uppercase letters";
    }