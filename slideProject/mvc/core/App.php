<?php
    //home/sayHi/1/2/3
    class App
    {
        protected $controller = 'LoginController';
        protected $action = 'index';
        protected $param = [];

        function __construct()
        {
            $arr = $this->urlProcess();
            //print_r($arr);
            //Array ( [0] => home [1] => sayHi [2] => 1 [3] => 2 [4] => 3 [5] => 4 )

            //xu ly controller    
            if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
                $this->controller = $arr[0];
                unset($arr[0]);
            }
            require_once('./mvc/controllers/' . $this->controller . '.php');
            $this->controller = new $this->controller;

            //xu ly action
            if (isset($arr[1])) {
                if (method_exists($this->controller, $arr[1])) {
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
            //xu ly param
            $this->param = $arr?array_values($arr):[];
            call_user_func_array([$this->controller, $this->action], $this->param);
            
        }

        function urlProcess()
        {
            if (isset($_GET['url'])) {
                return explode('/', filter_var(trim($_GET['url'], "/")));
            }
        }

    }