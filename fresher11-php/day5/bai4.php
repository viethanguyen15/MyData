<?php
    $arrs = [2, 3, 1, 5, 9, 8, 6];
    sort($arrs);
    echo "sắp xếp mảng tăng dần lấy 5 giá trị:<br/>";
    for ($i = 0; $i < 5; $i++) { 
        echo $arrs[$i]. " ";
    }
    rsort($arrs);
    echo "<br/>sắp xếp mảng giảm dần lấy 5 giá trị:<br/>";
    for ($i = 0; $i < 5; $i++) { 
        echo $arrs[$i]. " ";
    }
    function findAverage($arrs) {
        $sum = 0;
        $averageValue = 0;
        for ($i=0; $i < count($arrs); $i++) { 
            $sum += $arrs[$i];
            $averageValue = $sum / count($arrs);
        }
        echo "<br/>tổng dãy số $sum<br/>";
        echo "giá trị trung bình của dãy số: ";
        return $averageValue;
    }
    echo findAverage($arrs);

    