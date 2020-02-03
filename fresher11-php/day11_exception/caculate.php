<?php
    class Circle
    {
        public $diameterCircle;
        public function calculateDiameterCircle($radius)
        {
            try {
                if ($radius <= 0) {
                    throw new Exception("value must be greater than zero");    
                }
                return $this->diameterCircle = $radius * $radius * pi();
            } catch (Exception $e) {
                echo "<pre>";
                var_dump($e);
                echo "</pre>";
                echo 'invalid:' . $e->getMessage();
            }
        }
    }

    $circle = new Circle();
    echo $circle->calculateDiameterCircle(0);