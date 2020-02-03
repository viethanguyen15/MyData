<?php
    //kiểm tra ngay đã cho có hợp lệ hay không
    $date = '2020-01-25';

    $regExDate = '/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/';

    echo $date . '<br/>';
    if (preg_match($regExDate, $date)) {
        echo 'ngày tháng năm hợp lệ';
    } else {
        echo 'ngày tháng năm không hợp lệ';
    }