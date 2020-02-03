<?php
    abstract class Animal
    {
        protected $name;
        protected $leg;
        abstract public function getName();
    }

    class Cat extends Animal
    {
        // public function __construct($leg)
        // {
        //     echo $this->leg = $leg;
        // }

        public function getName()
        {
            return $this->name = 'cat';
            return $this->leg = '6 chan';
        }
    }

    $cat = new Cat();
    echo "<br/>";
    echo $cat->getName();