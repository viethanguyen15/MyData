<?php
    session_start();
    if (isset($_POST['submit'])) {
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $birth = $_POST['birth'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];

        
        $newInfo = [
            'id' => $id,
            'name' => $name,
            'birth' => $birth,
            'address' => $address,
            'salary' => $salary
        ];
        $_SESSION['infoStaff'][] = $newInfo;
    }
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

     
</div>
    <div class="container">
        <div style="width: 500px; height=500px; background-color: #FFFAF0; border: 1px solid green;">
        <form method="post">
            <h4 style="text-align: center;">Quan ly thanh vien</h4>
            <div class="form-group">
                <label>id</label>
                <input type="text" name="id" class="form-control" placeholder="Enter id">
            </div>
            <div class="form-group">
                <label>name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>birth</label>
                <input type="text" name="birth" class="form-control" placeholder="Enter birth">
            </div>
            <div class="form-group">
                <label>address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter address">
            </div>
            <div class="form-group">
                <label>salary</label>
                <input type="text" name="salary" class="form-control" placeholder="Enter salary">
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Add Staff">
        </form>
        </div>
    </div>
    <br/>
    <?php
        if (isset($_GET['search'])) {
            $searchName = $_GET['searchName'];
           
            if (array_search($searchName, array_column($_SESSION['infoStaff'], 'name')) !== false) {
                echo "<div class='alert alert-primary' role='alert'>Thông tin tìm kiếm hợp lệ nhân viên: " . $searchName ."</div>";
            }
            else {
                echo 'value is not in multidim array';
            }
        }
    ?>

    <div class="container">
        <form method="GET">
            <h4 style="text-align: center;">Tim kiem nhan vien</h4>
            <div class="form-group">
                <input type="text" name="searchName" class="form-control" placeholder="search name">
            </div>
            <input type="submit" name="search" class="btn btn-primary" value="Search Staff">
        </form>
    </div>

    <br/>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">birth</th>
                    <th scope="col">address</th>
                    <th scope="col">salary</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['infoStaff'] as $staff) { ?>
                <tr>
                    <th scope="row"><?php echo $staff['id']; ?></th>
                    <td><?php echo $staff['name']; ?></td>
                    <td><?php echo $staff['birth']; ?></td>
                    <td><?php echo $staff['address']; ?></td>
                    <td><?php echo $staff['salary']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>