<?php
    //chuyển đổi date thành timestamps
    $date = '2020-01-09';
    echo $date . '<br/>';
    $dateToTimestamp = strtotime($date);
    echo $dateToTimestamp;