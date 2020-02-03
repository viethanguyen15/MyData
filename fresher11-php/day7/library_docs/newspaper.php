<?php
    require_once('library.php');
    
    class Newspapers extends Library 
    {
        protected $category = "Newspapers";
        protected $releaseYear = "2020";
        protected $price = 10000;

        public function __construct($title, $author, $publisher)
        {
            $this->title = $title;
            $this->author = $author;
            $this->publisher = $publisher;
        }

        public function showInfo()
        {
            $infoOfNewspaper = [
                "category" => $this->category,
                "titleOfNewspaper" => $this->title,
                "author" => $this->author,
                "publisher" => $this->publisher,
                "release" => $this->releaseYear,
                "price" => $this->price
            ];
            return $infoOfNewspaper;
        }
    }