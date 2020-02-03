<?php
    namespace App;
    class Sport
    {
        public $sport;
        public function play($sport)
        {
            return $this->sport = $sport;
        }
    }