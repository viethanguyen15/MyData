<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>bang cuu chuong</title>
</head>
<body>
    <table class="table table-striped">
        <tr>
        <!--bang cuu chuong-->
        <?php
            for ($i = 1; $i < 10; $i++) {
                echo "<td>"; 
                for ($j = 1; $j < 10; $j++) { 
                    echo "$i x $j = ". ($i * $j). "<br/>";
                }
                echo "</td>";
            }
        ?>
        </tr>
    </table>
</body>
</html>