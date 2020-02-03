<?php
    interface Move {
        function run();
    }

    //class dog ke thua interface move
    class Dog implements Move {
        public function run() {
            echo 'cho chay bang 4 chan';
        }
    }

    class Cars implements Move {
        public function run() {
            echo 'xe hoi chay bang 4 banh';
        }
    }

    $myDog = new Dog();
    echo $myDog->run();
    $car = new Cars();
    echo $car->run();