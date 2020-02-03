<?php
    $animal = ['cat', 'dog', 'bird', 'elephant '];
    $animalSort = rsort($animal);
    foreach ($animal as $key => $value) {
        echo $value . "<br/>";
    }