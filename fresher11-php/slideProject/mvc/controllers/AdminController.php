<?php
    class AdminController extends Controller
    {
        
        public function index()
        {
            if (isset($_POST['login'])) {
                $name = $_POST['name'];
                $password = $_POST['password'];
               
                $sql = "SELECT * FROM login WHERE name = '$name' AND password = '$password'";
                $model = $this->model('LoginModel');
                if ($model->select($sql)) {
                    $_SESSION['name'] = $name;
                    $_SESSION['password'] = $password;
                   
                } else {   
                    $_SESSION['error']= "Invalid number or password";
                    $this->view('loginView',[
                        'errorLogin' => $_SESSION['error']
                    ]);
                }
            }
            if (isset($_SESSION['name']) && isset($_SESSION['password'])) {
                $this->view('adminView');
            }
        }
    }