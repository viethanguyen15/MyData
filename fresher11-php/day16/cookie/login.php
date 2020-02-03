<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];

        setcookie('name', $name, time() + 60);
        setcookie('password', $password, time() + 60);
        header('location: home.php');
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
        <input type="text" name="name" placeholder="name"><br/><br/>
        <input type="password" name="password" placeholder="password"><br/>
        <input type="submit" name="submit">
    </form>
</body>
</html>