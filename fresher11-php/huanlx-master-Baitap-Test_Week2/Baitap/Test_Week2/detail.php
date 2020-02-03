<?php
session_start();

require __DIR__ . '/vendor/autoload.php';

use App\Classes\Search;



if (isset($_POST['search'])) {
    $nameSearch = $_POST['search'];

    $search = new Search();
    if (!empty($_SESSION['employees'])) {
       $result = $search->searchByName($nameSearch, $_SESSION['employees']); 
    }else{

        // echo "Chưa khởi tạo dữ liệu";
    }
    
}{
    $nameSearch = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Employee</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
    <div class="container">
        <h3 style = "text-align:center;">Details Employee</h3>
            <?php   
                if (!empty($result)) {
                    foreach($result as $values)
                    {

                ?>
        <div class="row" style="margin-top:20px;">
               <div class="col-md-3">
                    <img src="http://placehold.it/150x200" alt="" class="img-rounded img-responsive" />
                </div>
                <div class="col-md-3">
                    <h4><?= $values['name']  ?></h4>

                    <small><cite title="San Francisco, USA"><?= $values['adress']  ?> <i class="glyphicon glyphicon-map-marker">
                    </i></cite></small>
                    <p>
                        <i class="glyphicon glyphicon-ok"></i><?= number_format($values['salary'])  ?> <small>vnđ</small>
                        <br />
                        <!-- <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a> -->
                        <br />
                        <i class="glyphicon glyphicon-gift"></i><?= $values['birth']  ?>
                    </p>

                </div> 
        </div>
        <hr>       
            <?php
                    }
                }else
                {
                    echo "Nhân viên không tồn tại : $nameSearch" . "<br>";
                }
            ?>

            <a href="index.php" class="btn btn-success my-2 my-sm-0" type="submit">HomePage</a>
    </div>

</body>
</html>