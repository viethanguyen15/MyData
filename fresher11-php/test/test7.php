<?php
    class Animal
    {
        public static $name;

        public static function setName()
        {
            echo 'animal';
        }

        public function getName()
        {
            //return $this->name = 'cat';
            return self::$name = 'cat';
        }
    }

    $animal = new Animal();
    echo $animal->getName();