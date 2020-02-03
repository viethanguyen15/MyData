<?php
    class Animal {
        public static $name;
        
        public static function nameChange() {
            //$this->name = "cat";
            return self::$name = "cat";
        }
    }

    $animalObj = new Animal();
    echo $animalObj->nameChange();