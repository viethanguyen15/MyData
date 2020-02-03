<?php
    require_once('library.php');

    class Stories extends Library
    {
        protected $category = "Stories";
        protected $releaseYear = "2018";
        protected $price = "doraemon";

        public function __construct($title, $author, $publisher)
        {
            $this->title = $title;
            $this->author = $author;
            $this->publisher=  $publisher;
        }

        public function showInfo()
        {
            {
                $infoOfStory = [
                    "category" => $this->category,
                    "titleOfStory" => $this->title,
                    "author" => $this->author,
                    "publisher" => $this->publisher,
                    "release" => $this->releaseYear,
                    "price" => $this->price
                ];
                return $infoOfStory;
            }
        }
    }