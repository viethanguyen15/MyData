<?php
    require_once('autoload.php');

    $books = new Books("conan", "vietha", "kimdong");
    $bookDetail = $books->showInfo();
    
    $newspaper = new Newspapers("cong nghe", "haviet", "tinhte");
    //$newspaperDetail = $newspaper->showInfo();
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
    <title>Library</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?php echo $bookDetail["category"]; ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Journals</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Stories</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dictionaries</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>