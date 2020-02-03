<?php
/**kiem tra cac phan tu trong mang  la mot chuoi: true hay khong phai chuoi: false */
    $animal = ['cat', 2, 'bird', 'elephant'];
    foreach ($animal as $key => $value) {
        $checkAnimalStr = var_dump(is_string($value))."<br/>";
        echo $checkAnimalStr;
    }