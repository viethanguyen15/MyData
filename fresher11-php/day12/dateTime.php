<?php
    // date_default_timezone_set('Asia/Ho_Chi_Minh');
    // echo date('d/m/Y - H:i:s');

    // date ($format, $timestamp = 'time()');
    // echo date('d/m/Y - H:i:s');

    date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date=date_create("2020-01-15");
	date_modify($date, "+8 days");
	echo date_format($date, "Y-m-d");