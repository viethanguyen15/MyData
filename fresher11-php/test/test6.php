<?php
    class Animal
    {
        public static function setName()
        {
            echo 'Animal';
        }

        public function getName()
        {
            //return $this->setName(); right
            return self::setName(); //right
        }
    }

    $animal = new Animal();
    echo $animal->getName();