<?php
    //giai thua dung for
    $factorialNumber = 5;
    $factorial = 1;
    for ($i = 1; $i <= $factorialNumber; $i++) { 
        $factorial *= $i;
    }
    echo "giai thừa của $factorialNumber = $factorial";