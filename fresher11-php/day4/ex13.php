<?php
    $currentYear = 2019;
    $resultAge = 0; 
    function tinh () {
        global $currentYear;
        global $resultAge;
        if (isset($_POST['submit'])) {
            $birth = $_POST['birth'];
            $resultAge = $currentYear - $birth;
            echo "đến năm ".$currentYear. " bạn đã được ". $resultAge ." tuổi";
        }
    }
    echo tinh();
?>

<form action="" method="post">
    <input type="text" name="birth">
    <input type="submit" name="submit">
</form>
