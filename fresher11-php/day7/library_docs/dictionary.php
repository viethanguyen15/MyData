<?php
    require_once('library.php');

    class Dictonaries extends Library
    {
        protected $category = "Dictionaries";
        protected $releaseYear = "2016";
        protected $price = "75000";

        public function __construct($title, $author, $publisher)
        {
            $this->title = $title;
            $this->author = $author;
            $this->publisher=  $publisher;
        }

        public function showInfo()
        {
            {
                $infoOfDictionary = [
                    "category" => $this->category,
                    "titleOfDictionary" => $this->title,
                    "author" => $this->author,
                    "publisher" => $this->publisher,
                    "release" => $this->releaseYear,
                    "price" => $this->price
                ];
                return $infoOfDictionary;
            }
        }
    }