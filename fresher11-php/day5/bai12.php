<?php
    $firstArrNumbers = [2, 7, 9, 6, 12, 11];
    $secondArrNumbers = [8, 6, 15, 3, 1, 10];
    $totalArrNumbers = array_merge($firstArrNumbers, $secondArrNumbers);
    print_r($totalArrNumbers);
    $minTotalArrNumbers = min($totalArrNumbers);
    echo $minTotalArrNumbers;
    $maxTotalArrNumbers = max($totalArrNumbers);
    echo $maxTotalArrNumbers;