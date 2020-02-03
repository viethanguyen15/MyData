<?php
    //Hiển thị thời gian theo Timezone cụ thể
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('m/d/Y h:i:s', time());
    echo $date;