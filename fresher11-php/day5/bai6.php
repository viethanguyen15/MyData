<?php
    $animal = [
        "d" => "dog",
        "c" => "chicken",
        "b" => "bird",
        "t" => "tiger" 
    ];
    echo "mảng ban đầu: ";
    foreach ($animal as $key => $value) {
        echo $value. " ";
    }
    echo "<br/>";
    $strAnimal = implode(" ", $animal);
    $strAnimalUpper = strtoupper($strAnimal);
    echo $strAnimalUpper."<br/>";
    $strAnimalLower = strtolower($strAnimalUpper);
    echo $strAnimalLower;