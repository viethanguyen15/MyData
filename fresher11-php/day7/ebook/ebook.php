<?php
    abstract class Ebook {
        protected $nameBook;
        protected $author;
        // protected $typeOfBook;
        // publisher
        protected $price;
        protected $content;
        abstract protected function borrowEbooks();
        abstract protected function giveBooks();
        abstract protected function showInfo();
        abstract protected function RegisterBooks();
        abstract protected function amountBorrowBooks();
        abstract  protected function amountGiveBooks();
    }
   