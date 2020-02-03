<?php
    abstract class Animal {
        protected $name;
        abstract function run();
    }

    class Dog extends Animal {
        public function run() {
            echo 'con cho chay 4 chan';
        }
    }

    class Person extends Animal {
        public function run() {
            echo 'ng di bang 2 chan';
        }
    }
    $myDog = new Dog();
    echo $myDog->run();
    $person = new Person();
    echo $person->run();