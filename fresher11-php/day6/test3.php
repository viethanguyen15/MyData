<?php
    class Animal {
        public function whichClass() {
            echo 'animal';
        }
        public function sayClassName() {
            self::whichClass();
        }
    }

    class Tiger extends Animal {
        public function whichClass() {
            echo 'tiger';
        }
    }

    $tigerObj = new Tiger();
    $tigerObj->sayClassName();