<?php
    $arrNumbers = [3, 2, 6, 7, 1, 9];
    foreach ($arrNumbers as $key => $value) {
        echo $value. " ";
    }
    $minNumber = min($arrNumbers);
    echo "<br/>giá trị nhỏ nhất trong mảng: ".$minNumber;