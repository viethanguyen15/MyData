<?php
    class Animal
    {
        public $str;
        public function test()
        {
            try {
                $this->str = null;
                echo strlen($this->str);

            } catch (Exception $e) {
                
            }
        }
    }