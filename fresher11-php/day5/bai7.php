<?php
    $typeOfMusic = [
        "first" => "dance",
        "second" => "electro",
        "third" => "ballad"
    ];

    echo "chuỗi 1 có ".$strFirst = strlen($typeOfMusic['first']). " phần tử<br/>";
    echo "chuỗi 2 có ".$strSecond = strlen($typeOfMusic['second'])." phần tử<br/>";
    echo "chuỗi 1 có ".$strThird = strlen($typeOfMusic['third'])." phần tử<br/>";

    echo max($typeOfMusic)." ". $strFirst;   
    echo min($typeOfMusic)." ".$strThird;   

    


    
