<?php
    session_start();

    include('Validate.php');
    include('AddStaff.php');
    include('SearchStaff.php');

    $searchStaff = new SearchStaff();
    $staffValidate = new ValidateStaff();
    $addStaff = new AddStaff();
    

    try {
        $staffValidate->validate();
        $add = $addStaff->Add();
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
    
    try {
        $searchStaff->search();
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
    //echo $searchStaff->search();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
       <form action="" method="post">
        <div class="form-group">
                <label>Search Staff</label>
                <input type="text" class="form-control" name="searchStaff" placeholder="search">
            </div>
            <button type="submit" class="btn btn-primary" name="search">Search Staff</button>
       </form>
    </div>
    <br/>
    <div class="container">
    <h1 style="text-align: center;">Staff Information</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                    <th scope="col">Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($add)) {
                        foreach ($add as $staffValue) {                  
                ?>
                <tr>
                    <th scope="row"><?php echo $staffValue['id']; ?></th>
                    <td><?php echo $staffValue['name']; ?></td>
                    <td><?php echo $staffValue['birthday']; ?></td>
                    <td><?php echo $staffValue['address']; ?></td>
                    <td><?php echo $staffValue['salary']; ?></td>
                </tr>
                <?php
                    }
                } 
                ?>
            </tbody>
        </table>
    </div>
    
    <div class="container"  style="">
        <h2 style="text-align: center;">Add Staff</h2>
        <form method="post">
            <div class="form-group">
                <label>Id</label>
                <input type="text" class="form-control" name="id" placeholder="id">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input type="text" class="form-control" name="birthday" placeholder="birthday">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="salary">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary" placeholder="salary">
            </div>
            <button type="submit" class="btn btn-primary" name="addStaff">Add Staff</button>
        </form>
    </div>
</body>
</html>