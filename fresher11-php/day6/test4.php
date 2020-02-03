<?php
    // class Cars {
    //     private $typeOfCar;
    //     public function setCar($typeOfCar){
    //         $this->typeOfCar = $typeOfCar;
    //     }

    //     public function getCar() {
    //         return $this->typeOfCar;
    //     }
    // }
    // $car = new Cars();
    // $car->setCar('bwm');
    // echo $car->getCar();

    class Cars {
        // private $nameOfCar;
        protected $nameOfCar;
        public $typeOfCar = 'ducati';

        function showName() {
            return $this->nameOfCar = "pai";
        }
        // function setCar($nameOfCar) {
        //     $this->nameOfCar = $nameOfCar;
        // }

        // function getCar() {
        //     return $this->nameOfCar;
        // }
    }    
    
    $car = new Cars();
    echo $car->showName();

    class XeHonDa extends Cars {
    //    function showData() {
    //        echo $this->typeOfCar;
    //        $this->setCar('ducati panigale');
    //        echo $this->getCar();
    //    }
        function showData() {
            return $this->nameOfCar = 'ducati panigale';
        }

   }

   $xehonda = new XeHonDa();
   echo $xehonda->showData();