<?php
    trait User
    {
        public function listUser()
        {
            return "list user";
        }
    }

    trait Admin
    {
        public function listAdmin()
        {
            return "list admin";
        }
    }

    class ShowData
    {
        use User, Admin;

        public function showUser()
        {
            return $this->listUser();
        }

        public function showAdmin()
        {
            return $this->listAdmin();
        }
    }

    $showData = new ShowData();
    echo $showData->showUser();
    echo "<br/>";
    echo $showData->showAdmin();