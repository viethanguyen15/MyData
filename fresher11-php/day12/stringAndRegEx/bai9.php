<?php
    //chèn 1 chuỗi vào vị trí bất kỳ của chuỗi khác
    $str = 'hoc php co ban ';
    $strInsert = 'va nang cao';
    $position = 15;
    $newStr = substr_replace($str, $strInsert, $position, 0);
    echo $newStr;