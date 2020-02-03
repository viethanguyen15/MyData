<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ban co vua</title>
</head>
<body>
    <!--ve ban co vua-->
    <div class="table" style="margin-left: 320px;">
        <table width="600" border="1">
            <?php
                for ($row = 1; $row <= 8 ; $row++) { 
                    echo "<tr>";
                    for ($col = 1; $col <= 8 ; $col++) { 
                        $total =  $row + $col;
                        echo ($total % 2 == 0) ?  "<td width = '50' height = '50' bgcolor = '#FFFFFF'></td>"
                        :"<td width = '50' height = '50' bgcolor = '#000000'></td>";
                       
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>