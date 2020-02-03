<?php
    $fruits = [
        "strawberry", "orange", "mango"
    ];
    sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
    foreach ($fruits as $key => $value) {
        echo $value ." ";
    }