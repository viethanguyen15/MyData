<?php
    //include('staff.php');

    class ValidateStaff
    {
        public $id;
        public $name;
        public $birthday;
        public $address;
        public $salary;
        public $patternId = '/^[1-9]{1,100}$/';
        public $patternName = '/^[A-Za-z0-9]{5,15}$/';
        public $patternBirthday = '/^[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}$/';
        public $patternAddress = '/\w{5,15}/';
        public $patternSalary = '/^[0-9]{7,8}$/';

        public function validate()
        {
            if (isset($_POST['addStaff'])) {
                $this->id = $_POST['id'];
                $this->name = $_POST['name'];
                $this->birthday = $_POST['birthday'];
                $this->address = $_POST['address'];
                $this->salary = $_POST['salary'];

                if (empty($this->id) && empty($this->birthday) && empty($this->birthday) && empty($this->salary) && empty($this->address)) {
                    throw new Exception("fields can't be empty");
                } else {
                    if (!preg_match($this->patternId, $this->id)) {
                        throw new Exception("id wrong format");
                            
                    }
    
                    if (!preg_match($this->patternName, $this->name)) {
                        throw new Exception("name wrong format");
                            
                    }

                    if (!preg_match($this->patternBirthday, $this->birthday)) {
                        throw new Exception("birthday wrong format");
                            
                    }

                    if (!preg_match($this->patternAddress, $this->address)) {
                        throw new Exception("address wrong format");
                            
                    }

                    if (!preg_match($this->patternSalary, $this->salary)) {
                        throw new Exception("salary wrong format");
                            
                    }  
                }
            }
        }
    }