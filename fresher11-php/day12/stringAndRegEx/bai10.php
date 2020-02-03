<?php
    //lấy từ đầu tiên của một câu
    $str = 'hoc php co ban va nang cao';
    echo $str . '<br/>';
    $splitStrToArr = explode(' ', $str);
    //print_r($splitStrToArr);
    echo $splitStrToArr[0];