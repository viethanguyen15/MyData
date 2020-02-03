<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
        //tam giac Floyd
        $n = 4;  
        echo "n = " . $n . "<br>";  
		$count = 1;  
		for ($i = $n; $i > 0; $i--)   
		{  
		   for ($j = $i; $j < $n + 1; $j++)   
		   {  
			 printf("%4s", $count);  
			 $count++;  
		   }   
           echo "<br>";
        }   
    ?>
    </body>
</html>