<?php
    //kiểm tra file có tồn tại không
    if (file_exists('hello.txt')) {
        echo 'File exists';
    } else {
        echo 'File not exists';
    }