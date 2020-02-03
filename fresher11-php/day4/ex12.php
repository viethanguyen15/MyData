<?php
    //kiem tra chuoi malindrome
    $str = "hello";
    function checkStrPalindrome($str) {
        if ($str == strrev($str)) {
            echo "$str is sring palindrome";
        }
        else{
            echo "$str is not palindrome";      
        }
    }
    echo checkStrPalindrome($str);