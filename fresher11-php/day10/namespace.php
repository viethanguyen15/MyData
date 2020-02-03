<?php
    // include('myApp/changeCode.php');
    // include('myApp/changeSport.php');
    
    
    function __autoload($className)
    {
        if (file_exists('myApp/' . $className . '.php')) {
            include_once('myApp/' . $className . '.php');
            echo 'ok';
        }
        else {
            echo 'not';
        }
    }

    use myApp\Sport\Sport;
    use myApp\Code\Code;

    $sport = new Sport('badminton');

    $code = new Code('php');
   