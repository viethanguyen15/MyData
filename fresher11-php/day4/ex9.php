<?php
    //kiem tra so nguyen to
    function checkPrimeNumber($number){
        if ($number < 2) {
            echo "$number is not prime number";
        }
        else if ($number % 2 == 0){
            echo "$number is not prime number";
        }
        else{
            echo "$number is prime number";
        }
    }
    echo checkPrimeNumber(10);