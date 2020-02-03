<?php
    class SumTwoNumber
    {
        public $firstNumber;
        public $secondNumber;
        public $sumNumber;

        public function setSum($firstNumber, $secondNumber)
        {
            $this->firstNumber = $firstNumber;
            $this->secondNumber = $secondNumber;
        }

        public function getSum()
        {
            return $this->sumNumber = $this->firstNumber + $this->secondNumber;
        }
    }

    $sumTwoNumber = new SumTwoNumber();
    $sumTwoNumber->setSum(50, 50);
    echo $sumTwoNumber->getSum();