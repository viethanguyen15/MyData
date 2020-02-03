<?php
    //an loi voi ng dung
    // $config = ini_get_all();
    // // echo "<pre>";
    // // print_r($config);
    // // echo "</pre>";

    // echo $timeZone = ini_get('date.timezone');
    ini_set('display_errors', 'off');
    ini_set('log_errors', 'on');
    ini_set('error_log', 'php-error.php');

    foreach ($variable as $key => $value) {
        echo $value;
    }