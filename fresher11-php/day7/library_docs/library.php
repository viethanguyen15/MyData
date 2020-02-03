<?php
    abstract class Library {
        protected $title;
        protected $author;
        protected $publisher;
        
        abstract function showInfo();
        //abstract function showDetail();

    }