<?php
    /**dừng thực thi chương trình trong một khoảng thời gian đã cho */
    $currentDate = date('h:i:s');
    echo $currentDate ."<br/>";
    sleep(5);
    echo $currentDate;