<?php
    $numbers = range(200, 250);
    foreach ($numbers as $key => $value) {
        if ($value % 4 == 0) {
            echo $value."<br/>";
        }
    }
