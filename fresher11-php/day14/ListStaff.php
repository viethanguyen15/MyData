<?php
    // include('AddStaff.php');
    // $staff = new AddStaff();
    // $listStaff = $staff->getAddStaff();
    var_dump($_POST);
    //include('AddStaff.php');
    //$staff = new AddStaff();
    //$listStaff = $staff->getAddStaff();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>Document</title>
    </head>
    <body>
    <form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="text" name="work">
    <button type="submit" name="submit">ss</button>
</form>
        <a href="AddStaff.php">Add Staff</a>
        <table>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Work</th>
                    </tr>
                </thead>
                <?php foreach ($listStaff as $list) { ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $list['id']; ?></th>
                        <td><?php echo $list['name']; ?></td>
                        <td><?php echo $list['age']; ?></td>
                        <td><?php echo $list['work']; ?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </table>
    </body>
</html>