<?php
    require_once('autoload.php');

    $book = new Books("conan", "Aoyama Yoshimasa", "kimdong");
    $bookDetail = $book->showInfo();
    
    $newspaper = new Newspapers("internet of things", "tutorial", "tinhte");
    $newspaperDetail = $newspaper->showInfo();

    $journal = new Journals("khoa hoc", "php.net", "topdev");
    $journalDetail = $journal->showInfo();

    $story = new Stories("Sherlock Holmes", " Arthur Conan Doyle ", "kim dong");
    $storyDetail = $story->showInfo();

    $dictionary = new Dictonaries("tu dien anh viet", "nguyen van a", "gdvn");
    $dictionaryDetail = $dictionary->showInfo();
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
    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?php echo $bookDetail["category"]; ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?php echo $newspaperDetail["category"]; ?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?php echo $journalDetail["category"]; ?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?php echo $storyDetail["category"]; ?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?php echo $dictionaryDetail["category"]; ?></a>
                </li>
            </ul>
        </div>
    </nav>
    <!--end header-->
    <br/>
    <div class="container">
        <table class="table">
            <thead class="thead-light text-center">
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Detail</th>
                    
                </tr>
            </thead>
            
            <tbody class="text-center">
                <tr>  
                    <td><?php echo $bookDetail['category']; ?></td>    
                    <td><?php echo $bookDetail['titleOfBook']; ?></td>
                    <td><?php echo $bookDetail['author']; ?></td>
                    <td><a href="bookDetail.php">detail</a></td>                 
                </tr>
                <tr>  
                    <td><?php echo $newspaperDetail['category']; ?></td>    
                    <td><?php echo $newspaperDetail['titleOfNewspaper']; ?></td>
                    <td><?php echo $newspaperDetail['author']; ?></td>
                    <td><a href="newspaperDetail.php">detail</a></td>                 
                </tr>
                <tr>  
                    <td><?php echo $journalDetail['category']; ?></td>    
                    <td><?php echo $journalDetail['titleOfJounal']; ?></td>
                    <td><?php echo $journalDetail['author']; ?></td>
                    <td><a href="journalDetail.php">detail</a></td>                 
                </tr>
                <tr>  
                    <td><?php echo $storyDetail['category']; ?></td>    
                    <td><?php echo $storyDetail['titleOfStory']; ?></td>
                    <td><?php echo $storyDetail['author']; ?></td>
                    <td><a href="#">detail</a></td>                 
                </tr>
                <tr>  
                    <td><?php echo $dictionaryDetail['category']; ?></td>    
                    <td><?php echo $dictionaryDetail['titleOfDictionary']; ?></td>
                    <td><?php echo $dictionaryDetail['author']; ?></td>
                    <td><a href="#">detail</a></td>                 
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>