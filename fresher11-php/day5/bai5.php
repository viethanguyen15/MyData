<?php
    $firstColors = ["red", "blue"];
    $secondColors = ["green", "yellow"];
    $totalColors = array_merge($firstColors, $secondColors);
    foreach ($totalColors as $key => $value) {
        echo $value." ";
    }