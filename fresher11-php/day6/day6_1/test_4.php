<?php
    class Animal {
        public static $name;

        public function setClassName() {
            return self::$name = 'animal';
        }
    }

    $animalObj = new Animal();
    echo $animalObj->setClassName();