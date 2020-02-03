<?php
    //kiểm tra ngày hiện tại có phải cuối tuần không
    $dt='2020-01-10';
    $dt1 = strtotime($dt);
    $dt2 = date("l", $dt1);
    $dt3 = strtolower($dt2);
    if(($dt3 == "saturday" )|| ($dt3 == "sunday")) {
        echo $dt3.' is weekend'."\n";
    } else {
        echo $dt3.' is not weekend'."\n";
    }