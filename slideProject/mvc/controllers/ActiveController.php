<?php
    class ActiveController extends Controller
    {
        function active()
        {
            if (isset($_POST['active'])) {
                $id = $_POST['checkBox'];
                var_dump($id);
                foreach ($id as $value) {
                    $modelUpdateOneUser = $this->model('UserModel');
                    $getActive = $modelUpdateOneUser->active($value);
                }
            }    
        }
    }