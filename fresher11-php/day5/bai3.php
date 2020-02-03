<?php
    $arrs = [2, 3, 6, 7, 4, 2];
    print_r($arrs);
    array_push($arrs, 8);
    array_unshift($arrs, 20);
    array_splice($arrs, 3, 0, 30);
    echo "<br/>new array:";
    foreach ($arrs as $key => $value) {
        echo $value." ";
    }
    