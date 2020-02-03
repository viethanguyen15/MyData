<?php
    $readFileData = file_get_contents('data.json');
    echo $readFileData;
    echo "<br/>Info client: <br/>";
    $convertToArr = json_decode($readFileData, true);
    foreach ($convertToArr as $key => $value) {
        echo $value . "<br/>";
    }