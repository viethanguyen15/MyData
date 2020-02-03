<?php
    function __autoload($className) {
        if (file_exists($className . '.php')) {
            include_once $className . '.php';
        }
    }

    // class Person {
    //     public function __construct() {
    //         echo 'class person';
    //     }
    // }

    $hello = new Hello();
    $sayHi = new sayHi();