<?php
    class Animal {

        public static function whichClass() {
            // return self::$name = "cat";
            echo 'animal';
        }

        public function sayClassName() {
            return $this->whichClass();
            //return self::whichClass();
        }
    }

    $animalObj = new Animal();
    echo $animalObj->sayClassName();