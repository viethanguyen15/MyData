<?php
    include_once('AddStaff.php');
    class SearchStaff extends AddStaff
    {
        public $search;
        public $searchStaff;
        public $keySearch;
        public $patternSearch = '/[A-Za-z]{5,15}/';

        public function search()
        {
            if (isset($_POST['search'])) {
                $this->searchStaff = $_POST['searchStaff'];
               
                if (empty($this->searchStaff)) {
                    throw new Exception("field search can not empty");
                        
                }

                if (!preg_match($this->patternSearch, $this->searchStaff)) {
                    throw new Exception("input search wrong format");
                        
                } elseif (isset($_SESSION['newStaff'])) {
                    foreach ($_SESSION['newStaff'] as $key => $value) {
                        $value['name'] == $this->searchStaff;
                        return $key;
                    }

                    return null;
                }
            }
        }
    }