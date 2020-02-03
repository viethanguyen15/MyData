<?php
    require_once('library.php');
    class Books extends Library 
    {
        protected $category = "Books";
        protected $releaseYear = "2008";
        protected $price = 10000;

        public function __construct($titleOfBook, $authorOfBook, $publisherOfBook)
        {
            $this->title = $titleOfBook;
            $this->author = $authorOfBook;
            $this->publisher = $publisherOfBook;
        }

        public function showInfo()
        {
            $infoOfBook = [
                "category" => $this->category,
                "titleOfBook" => $this->title,
                "author" => $this->author,
                "publisher" => $this->publisher,
                "release" => $this->releaseYear,
                "price" => $this->price
            ];
            return $infoOfBook;
        }
    }