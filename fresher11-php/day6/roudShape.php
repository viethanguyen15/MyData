<?php
    include_once('shape.php');
    class RoundShape extends Shape {
        public $pi;
        public $radius;
        public function getPerimeterRoundShape() {
            return $this->perimeter = $this->pi * 2 * $this->radius;
        }

        public function getAcreageRoundShape() {
            return $this->acreage = $this->pi * $this->radius * $this->radius;
        }
    }

    $roundShape = new RoundShape();
    echo $roundShape->pi = 3.14;
    echo "<br/>";
    echo $roundShape->radius = 5;
    echo "<br/>";
    echo "chu vi hình tròn: ";
    echo $roundShape->getPerimeterRoundShape();
    echo "<br/>";
    echo "diện tích hình tròn: ";
    echo $roundShape->getAcreageRoundShape();
    