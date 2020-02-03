<?php
    session_start();
    if (isset($_POST['submit'])) {
        $stt = $_POST['stt'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $_SESSION['user_info'] = isset($_SESSION['user_info']) ? $_SESSION['user_info'] : [];
        $_SESSION['user_info'][] = ['stt'=> $stt, 'name' => $name, 'age'=> $age];
        foreach ($_SESSION['user_info'] as $key => $value) {
            echo $key;
        }
        // $info = 'stt: '.$stt.' name: '.$name.' age: '.$age;
        // echo $info;
        // echo $_SESSION['stt'] = $stt;
        // echo $_SESSION['name'] = $name;
        // echo $_SESSION['age'] = $age;


    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">stt</th>
                        <th scope="col">name</th>
                        <th scope="col">age</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>    
                        <td><input type="text" name="stt"></td>
                        <td><input type="text" name="name"></td>
                        <td><input type="text" name="age"></td>
                        <td><input type="submit" name="submit"></td>
                    </tr>
                </tbody>             
            </table>
        </form>
        
    </body>
</html>