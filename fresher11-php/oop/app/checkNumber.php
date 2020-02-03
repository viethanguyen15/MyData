<?php
    abstract class checkNumber
    {
        protected $number;
        abstract function validateNumber();
        abstract public function isNumber();
        abstract public function networkOperator();
    }