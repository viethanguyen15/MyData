<?php
    //đếm số ngày từ hiện tại tới ngày sinh nhật kế tiếp
    $nextBirthday = mktime(0, 0, 0, 10, 1, 2020);
    //echo $nextBirthday;
    $today = time();
    $handling = $nextBirthday - $today;
    $numberOfBirthdays = (int)($handling / 86400);
    echo $numberOfBirthdays . ' ngày nữa đến sinh nhật';