<?php
    //kiểm tra chuỗi đã cho có chứa một chuỗi nào đó không
    $newStr = 'day la mot chuoi';
    $strSearch = 'mot';
    function searchStr($strSearch, $newStr)
    {
        $position = strpos($newStr, $strSearch, 3);
        if ($position == true) {
            return "string at position " . $position;
        } else {
            return "string can't find";
        }
    }

    echo searchStr($strSearch, $newStr);