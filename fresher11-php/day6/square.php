<?php
    include_once('shape.php');
    class Square extends Shape {
        public $squareEdge;

        public function getPerimeter() {
            return $this->perimeter = $this->squareEdge * 4;
        }

        public function getAcreage() {
            return $this->acreage = $this->squareEdge * $this->squareEdge;
        }
    } 

    $square = new Square();
    echo $square->squareEdge = 10;
    echo "<br/>";
    echo "chu vi hình vuông: ";
    echo $square->getPerimeter();
    echo "<br/> diện tích hình vuông: ";
    echo $square->getAcreage();