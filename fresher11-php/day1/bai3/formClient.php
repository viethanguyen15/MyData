<?php
    /**lấy thông tin client nhập từ form */
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        echo 'name: '.$name.' and age: '.$age;
    }
?>
<form action="" method="post">
    <input type="text" name="name" placeholder="enter your name">
    <input type="text" name="age" placeholder="enter your age">
    <input type="submit" name="submit" value="submit">
</form>