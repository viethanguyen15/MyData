<?php
    /**sap xep mang(function) */
    $arrs = [2, 3, 4, 1, 6, 5, 7, 9, 8];
    function sortArr($arrs) {
        $temp = 0;
        for ($i = 0; $i <  count($arrs) - 1; $i++) { 
            for ($j = $i + 1; $j < count($arrs); $j++) { 
                if ($arrs[$i] > $arrs[$j]) {
                    $temp = $arrs[$i];
                    $arrs[$i] = $arrs[$j];
                    $arrs[$j] = $temp;
                }
            }
        }

        for ($i = 0; $i < count($arrs); $i++) { 
            echo $arrs[$i];
        }
    }
    echo sortArr($arrs);
    echo "<br/>";

    function sortArrs($arrs) {
        sort($arrs);
        for ($i = 0; $i < count($arrs); $i++) { 
            echo $arrs[$i];
        }
    }
    echo sortArrs($arrs);
    echo "<br/>";
    
    function findMax($arrs) {
        $max = 0;
        $arrs[0] = $max;
        for ($i = 0; $i < count($arrs); $i++) { 
            if ($arrs[$i] > $max) {
                $max = $arrs[$i];
            }
        }
        echo $max;
    }
    echo findMax($arrs);