<?php
    class Animal
    {
        public function setName()
        {
            echo 'Animal';
        }

        public function getName()
        {
            // $this->setName();
            self::setName();
        }
    }

    class Cat extends Animal
    {
        public function setName()
        {
            echo 'cat';
        }
    }

    $cat = new Cat();
    $cat->getName();