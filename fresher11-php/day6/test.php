<?php
    //khai bao class
    class animal {
        //thuoc tinh
        var $eyes;
        var $nose;
        var $leg;
        var $hello = 'day la con cho cua toi';
        //phuong thuc
        function eat($food) {
            echo 'hom nay an '. $food;
            echo $this->hello;
        }
    }
    //khoi tao doi tuong
    $dog = new animal();
    $cat = new animal();

    //truy xuat
    $dog->eyes = 'black';
    $dog->leg = 'nhieu long';

    //gan gia tri
    $cat->eyes = 'red';
    $cat->leg = 'be';
    echo $dog->eyes;
    echo $dog->leg;
    echo "<br/>";
    $dog->eat('rice');

