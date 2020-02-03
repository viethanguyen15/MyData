<?php
    $arrs = [
        "name" => "Nguyen Viet Ha",
        "group" => "Fresher11 - PHP",
        "program" => "PHP Basic",
        "framework" => "laravel"
    ];
    foreach ($arrs as $key => $value) {
        echo $value . " ";
    }
    echo "<br/>";
    $convertToJson = json_encode($arrs);
    echo $convertToJson;
    file_put_contents('dataInfo.json', $convertToJson);