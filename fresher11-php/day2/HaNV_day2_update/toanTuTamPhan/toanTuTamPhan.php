<?php
    function toanTuTamPhan($number)
    {
        if($number > 20){
            echo "$number lớn hơn 20 <br/>";
        }
        if($number > 15){
            echo "$number lớn hơn 15 <br/>";
        }
        if($number > 10){
            echo "$number lớn hơn 10 <br/>";
        }
    }
    toanTuTamPhan(30);
    toanTuTamPhan(17);
    toanTuTamPhan(15);
    