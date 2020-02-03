<?php
    //tính khoảng cách giữa 2 ngày bất kỳ
    $startDate = '2020-01-09';
    $endDate = '2020-01-25';

    $handling = abs(strtotime($endDate) - strtotime($startDate));
    //abs: ham lay gia tri tuyet doi
    $year = floor($handling / 365 * 60 * 60 * 24);
    //floor: ham lam tron
    $months = floor(($handling - $year * 365*60*60*24) / (30*60*60*24));
    $days = floor(($handling - $year * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    echo 'year: ' . $year . ' months: ' . $months . ' days: ' . $days;