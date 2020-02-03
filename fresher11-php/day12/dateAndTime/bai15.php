<?php
    //chuyển đổi định dạng ngày tháng
    $date = '2020-01-10';
    echo $date;
    $newDate = date('d-m-Y', strtotime($date)); 
    echo '<br/>';
    echo $newDate;