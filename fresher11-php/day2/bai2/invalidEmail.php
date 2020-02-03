<?php
    /**validation email */
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        echo $email;
    }
    
?>
<form action="" method="post">
    <input type="email" name="email" required>
    <input type="submit" name="submit">
</form>