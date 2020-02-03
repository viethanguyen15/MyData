<?php

require __DIR__ . '/vendor/autoload.php';

session_start();

use App\Classes\Employee;

if(isset($_POST['add']))
{   
        $dataRequest = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'birth' => $_POST['birth'],
            'adress' => $_POST['adress'],
            'salary' => $_POST['salary']
        ];

       $newEmployee = new Employee(); 
        
        $array  = $newEmployee->addEmployee($dataRequest);
        
        $_SESSION['employees'][] = $newEmployee->addEmployee($dataRequest);

        // $employeesSorted =  $newEmployee->sortBySalary($_SESSION['employees']);         
}

    
    if (!empty($_SESSION['employees'])) {
        $employee = new Employee();

        $employeesSorted =  $employee->sortBySalary($_SESSION['employees']);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST OFF ALL EMPLOYEES</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>


    <div class="container">
        <h3 style="text-align:center">IMFOMATIONS OF ALL EMPLOYEES</h3>
        <div class="row">

        <!--Table-->
            <div class="col-md-8 offset-md-2">
                <table class="table table-dark">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Họ Tên</th>
                        <th scope="col">Ngày Sinh</th>
                        <th scope="col">Mức Lương</th>
                        <th scope="col">Địa Chỉ</th>
                        </tr>
                    </thead>
                    <tbody>
 <?php
        if (!empty($_SESSION['employees'])) {

            foreach($employeesSorted as $values)
            {
        
    ?>

                            <tr>
                                <th scope="row"><?= $values['id']?></th>
                                <td><?= $values['name']?></td>
                                <td><?= $values['birth']?></td>
                                <td><?= $values['salary']?></td>
                                <td><?= $values['adress']?></td>
                            </tr>

    <?php

            }
        }else{
    ?>
   
                            <tr>
                                <td>Chưa có Nhân viên nào</td>
                            </tr>
    <?php            
        }
    
    ?>
                    </tbody>
                </table>            
            </div>                           
        </div>

        <div class="row">
        <!-- Search Form-->
            <div class="col-md-4 offset-md-2">
                <form class="form-inline" method ="POST" action='detail.php'>
                    <input class="form-control mr-sm-4" name='search' type="text" placeholder="Nhập Họ Tên">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>            
            </div>
        </div>
    </div>
    <!--Add New Form-->
    
    <div class="container" style="margin-top:30px;">

        <h2 style="text-align:center">FORM ADD EMPLOYEE</h3>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="" method="POST" >
                    <div class="form-group"id="add-form">
                        <label for="formGroupExampleInput">ID</label>
                        <input type="number" class="form-control" name="id" id="formGroupExampleInput" placeholder=" ID" require>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Họ Tên</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="Nhập vào họ vs tên" require>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Ngày Sinh</label>
                        <input type="date" name="birth" class="form-control" id="formGroupExampleInput2" placeholder="Nhập vào Ngày sinh" require>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Địa Chỉ</label>
                        <input type="text" name="adress" class="form-control" id="formGroupExampleInput2" placeholder="Nhập vào Địa Chỉ" require>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Mức Lương</label>
                        <input type="number" min='0' name="salary" class="form-control" id="formGroupExampleInput2" placeholder="Nhập vào Mức Lương" require>
                    </div>

                    <button type="submit" name='add' class="btn btn-primary"> Save</button>  
                    <button type="reset" name = "reset" class="btn btn-warning"> Reset</button>  
                </form>            
            </div>
        </div>

    </div>

    <?php



    ?>
</body>
</html>