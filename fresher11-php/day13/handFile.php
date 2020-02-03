<?php
    //ghi nội dung mới vào sau nội dung cũ trong file hello.txt và lấy ra thông tin file
    $path = 'hello.txt';
    $fp = @fopen($path, "a");
      
    if (!$fp) {
        echo 'Mở file không thành công';
    }
    else {
        $data = 'nang cao';
        fwrite($fp, $data);
        $readData = fread($fp, filesize('hello.txt'));
        echo $readData;
        echo file_get_contents('hello.txt');
    }