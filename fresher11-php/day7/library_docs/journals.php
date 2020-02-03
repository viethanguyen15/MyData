<?php
    require_once('library.php');

    class Journals extends Library
    {
        protected $category = "Journals";
        protected $releaseYear = "2019";
        protected $price = 10000;

        public function __construct($title, $author, $publisher)
        {
            $this->title = $title;
            $this->author = $author;
            $this->publisher=  $publisher;
        }

        public function showInfo()
        {
            {
                $infoOfJounal = [
                    "category" => $this->category,
                    "titleOfJounal" => $this->title,
                    "author" => $this->author,
                    "publisher" => $this->publisher,
                    "release" => $this->releaseYear,
                    "price" => $this->price
                ];
                return $infoOfJounal;
            }
        }
    }