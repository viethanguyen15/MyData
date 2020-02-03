<?php
    function errorMessage()
    {
        if (empty($_POST['name'])) {
            throw new Exception("name is not empty");
        }
    
        if (empty($_POST['age'])) {
            throw new Exception("age is not empty");
        }
    
        if (empty($_POST['work'])) {
            throw new Exception("work is not empty");
            
        }
    }