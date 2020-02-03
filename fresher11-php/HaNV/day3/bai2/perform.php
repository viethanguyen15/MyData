<?php
    $n1 = 100;
    $n2 = 50;
    $mul_n = $n1 * $n2;
    echo $mul_n."<br/>";
    $div_n = $mul_n / 2;
    echo $div_n."<br/>";
    if ($div_n == 200) {
        var_dump(true);
    }
    else {
        var_dump(false);
    }