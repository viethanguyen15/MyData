<?php
    namespace myApp\Code;
    class Code
    {
        public $code;
        function __construct($code)
        {
            echo $this->code = $code;
        }
    }
