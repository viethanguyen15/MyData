<?php
    /**thong tin he dieu hanh */
    $infoSystem = php_uname();
    echo $infoSystem."<br/>";
    echo PHP_OS."<br/>";
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {  
        echo 'Server đang sử dụng Windows';  
        } 
    else {  
        echo 'Đây không phải là Server đang sử dụng Windows';  
        }  