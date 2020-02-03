<?php
    /**tinh giai thua mot so dung function */
    function factorialNumber($num){
        $factorial = 1;
        if ($num == 0 || $num == 1) {
            return $factorial;
        }
        
            for ($i = 2; $i <= $num; $i++) { 
                $factorial *= $i;
            }
            return $factorial;
    
    }
    echo factorialNumber(5);
