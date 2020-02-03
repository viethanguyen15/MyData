<?php
    class Animal
    {
        public static $name = 'cat';

        public static function getName()
        {
            return self::$name;
            //return static::$name;
            //return Animal::$name;
        }

        public function showAll()
        {
            return self::getName();
        }
    }

    $animal = new Animal();
    //echo $animal->showAll();

    echo Animal::$name;
    echo Animal::getName();