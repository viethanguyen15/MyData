<?php
    //đọc file
    $fp = @fopen('hello.txt', "r");
  
    // Kiểm tra file mở thành công không
    if (!$fp) {
        echo 'cannot open file';
    }
    else
    {
        // Lặp qua từng ký tự để đọc
        while(!feof($fp))
        {
            echo fgetc($fp);
        }
    }