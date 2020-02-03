<?php
    if (isset($_POST['submit'])) {
        if (isset($_FILES['file'])) {
            //echo "<pre>";
            //print_r($_FILES);
            //echo "</pre>";
            $error = array();
            $fileName = $_FILES['file']['name'];
            $fileSize = $_FILES['file']['size'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $targetDir = 'upload/';
            $targetFile = $targetDir . basename($fileName);
            
            if ($fileSize < 5242880) {
                $error['file'] = 'upload file < 5MB';
            }

            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            //echo $fileType;
            $fileExtensionTypes = array('png', 'jpg', 'jpeg');
            if (!in_array($fileType, $fileExtensionTypes)) {
                $error['file'] = 'just upload file image';
            }

            if (file_exists($targetFile)) {
                $error['file'] = 'file exists';
            }

            if (empty($error)) {
                if (move_uploaded_file($fileTmpName, $targetFile)) {
                    echo 'upload successfully';
                    $flag = true;
                } else {
                    echo 'upload fail';
                }
            }
        }
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit">
    </form>

    <?php if (isset($flag)) { ?>
        <img src="<?php echo $targetFile; ?>" alt="">
    <?php } ?>    
</body>
</html>