<?php
    require_once('newspaper.php');
    $newspaper = new Newspapers("cong nghe", "haviet", "tinhte");
    $newspaperDetail = $newspaper->showInfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead class="thead-dark text-center">
        <tr>
            <th scope="col">category</th>
            <th scope="col">titleOfNewspaper</th>
            <th scope="col">author</th>
            <th scope="col">publisher</th>
            <th scope="col">release</th>
            <th scope="col">price</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr>
            <?php foreach ($newspaperDetail as $key => $value) { ?>
            <td><?php echo $value; ?></td>
            <?php } ?>               
        </tr>
  </tbody>
</table>
</body>
</html>