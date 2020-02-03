<?php
    //include('Validate.php');
    class AddStaff
    {
        public $id;
        public $name;
        public $birthday;
        public $salary;
        public $address;
        public $arrStaff = [];

        public function Add()
        {
            if (isset($_POST['addStaff'])) {
                $this->id = $_POST['id'];
                $this->name = $_POST['name'];
                $this->birthday = $_POST['birthday'];
                $this->address = $_POST['address'];
                $this->salary = $_POST['salary'];

                $this->arrStaff = [
                    'id' => $this->id,
                    'name' => $this->name,
                    'birthday' => $this->birthday,
                    'address' => $this->address,
                    'salary' => $this->salary
                ];

                $_SESSION['newStaff'][] = $this->arrStaff;

                return $_SESSION['newStaff'];
                //  echo "<pre>";
                //  print_r($_SESSION['newStaff']);
                //  echo "</pre>";
            }    
            
        }
    }