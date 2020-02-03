<?php
    //chyển tên tháng dạng số thành tên tháng dạng chữ trong php
    $monthNumber = 1;
    $monthStr = date('F', mktime($monthNumber));
    echo $monthStr;