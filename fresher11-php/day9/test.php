<?php
    class Animal
    {
        public static $name = 'cat';

        public static function setName()
        {
            return self::$name;
            //return $this->name;

            //return Animal::$name;
            return static::$name;
        }

        public static function getName()
        {
            //return Animal::setName();
            //return $this->setName();
            return static::setName();
        }
    }

    //$cat = new Animal();
    //echo $cat->getName();

    echo Animal::$name;