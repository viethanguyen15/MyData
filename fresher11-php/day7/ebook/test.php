<?php
    // class Person {
    //     public static $name;

    //     public static function changeName() {
    //         return self::$name = "ha";
    //     }
    // }

    // $person = new Person();
    // echo $person->changeName();

    // class Person {
    //     public $name;

    //     public static function changeName() {
    //         return self::$name = "ha";
    //     }
    // }

    // $person = new Person();
    // echo $person->changeName();

    // class Person {
    //     public $name;

    //     public static function changeName() {
    //         echo "im ha";
    //     }

    //     public function sayName() {
    //         //self::changeName();
    //         $this->changeName();
    //     }
    // }

    // $person = new Person();
    // echo $person->sayName();

    // class Animal {

    //     public static $name;
    
    //     public static function whichClass() {
    //         echo "I am an Animal!";
    //     }
    
    //     public function sayClassName() {
    //         return self::$name = "My name is Animal";
    //     }
    // }
    
    // $animalObj = new Animal();
    // echo $animalObj->sayClassName();
    
    class Animal {

        public static $name;
    
        public function setClassName() {
            $this->name = "My name is Animal";
        }
    }
    
    $animalObj = new Animal();
    
    $animalObj2 = new Animal();
    
    $animalObj->setClassName();
    
    echo $animalObj->name;
    
    echo $animalObj2->name; 