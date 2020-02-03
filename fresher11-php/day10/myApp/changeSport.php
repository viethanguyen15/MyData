<?php
    namespace myApp\Sport;
    class Sport
    {
        public $sport;
        function __construct($sport)
        {
            echo $this->sport = $sport;
        }
    }
