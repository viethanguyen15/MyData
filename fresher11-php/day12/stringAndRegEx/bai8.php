<?php
    //xóa một phần tử trong chuỗi bắt đầu từ đầu chuỗi
    $str = 'day la mot chuoi';
    $splitStr = str_replace($str[4], '', $str);
    echo $splitStr;

