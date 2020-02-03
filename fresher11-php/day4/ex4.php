<?php
    /**dem mot ky tu bat ky trong chuoi*/
    $newStr = "đây là fresher11 - php";
    $charOfStr = "p";
    $count = 0;
    for ($i = 0; $i < strlen($newStr); $i++) { 
        if ($newStr[$i] == $charOfStr) {
            $count++;
        }
    }
    echo "chuỗi có ".$count. " ký tự ".$charOfStr. " trong chuỗi ".$newStr; 
