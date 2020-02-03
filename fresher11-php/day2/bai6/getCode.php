
<?php
    $all_lines = file('https://www.ntq-solution.com.vn/');  
    foreach ($all_lines as $line_num => $line)  
    {  
	    echo "Dòng thứ {$line_num}: " . htmlspecialchars($line) . "<br>";  
    } 
  