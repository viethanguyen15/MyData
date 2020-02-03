<?php
    include_once('shape.php');
    class Rectangle extends Shape {
        public $length;
        public $width;

        public function getPerimeter() {
            return $this->perimeter = ($this->length + $this->width) * 2;
        }

        public function getAcreage() {
            return $this->acreage = $this->length * $this->width;
        }
    }

    $rectangle = new Rectangle();
    echo $rectangle->length = 10;
    echo "<br/>";
    echo $rectangle->width = 5;
    echo "<br/>";
    echo "chu vi hình chữ nhât: ";
    echo $rectangle->getPerimeter();
    echo "<br/>";
    echo "diện tích hình chữ nhật: ";
    echo $rectangle->getAcreage();