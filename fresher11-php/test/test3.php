<?php
    class Animal
    {
        protected static $name = 'cat';

        public static function getName()
        {
            echo self::$name;
            echo "<br/>";
            echo static::$name;
        }
    }

    class Cat extends Animal
    {
        protected static $name = 'dog';
    }

    Cat::getName();