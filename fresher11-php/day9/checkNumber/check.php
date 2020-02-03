<?php
    if (isset($_POST['submit'])) {
        $valueInput = $_POST['valueNumber'];
        $checkNumber = '/[0-9]{10,11}/';
        
        if (preg_match($checkNumber, $valueInput)) {    
            echo "số hợp lệ";
        } else {
            echo "số không hợp lệ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="valueNumber">
        <input type="submit" value="submit" name="submit">
    </form>

    <div>
    </div>
</body>
</html>