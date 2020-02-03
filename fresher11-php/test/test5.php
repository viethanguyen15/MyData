<?php
    class Animal
    {
        public static $name;

        public static function getName()
        {
            //$this->name = 'cat'; 
            return self::$name = 'cat';
        }
    }

    $animal=  new Animal();
    echo $animal->getName();