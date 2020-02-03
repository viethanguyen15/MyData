<?php
    //cộng trừ ngày nào đó từ số ngày đã cho
    $date = '2020-01-10';
    echo 'ngày hiện tại: ' . $date . '<br/>';
    $timeStamp = strtotime($date);
    $newTime = $timeStamp + 5 * 24 * 60 * 60;
    echo date('Y-m-d', $newTime);
