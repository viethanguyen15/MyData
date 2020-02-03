<?php
    //lấy ngày đầu tiên và ngày cuối cùng của 1 tháng từ một ngày đã cho
    $date = "2020-01-10";  
	echo 'Ngày đầu tháng: '. date("Y-m-01", strtotime($date)).' - Ngày
	cuối tháng: '. date("Y-m-t", strtotime($date));