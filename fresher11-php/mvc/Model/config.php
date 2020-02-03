<?php
    class Database
    {
        private $localhost = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database = 'ntq_database';
        private $conn = null;
        private $result = null;

        public function connect()
        {
            $this->conn = new mysqli($this->localhost, $this->username, $this->password, $this->database);
            if (!$this->conn) {
                die('connect fail');
            } else {
                echo 'success';
                mysqli_set_charset($this->conn, 'UTF-8');
            }

            return $this->conn;
        }

        public function execute($sql)
        {
            $this->result = $this->conn->query($sql);
            $this->result;
        }

        public function getData()
        {
            if ($this->result) {
                $data = mysqli_fetch_array($this->result);
            } else {
                $data = '';
            }
        }

        public function getAllData()
        {
            if (!$this->result) {
                $data = '';
            } else {
                while ($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function addData($name, $activate, $timeCreated, $timeUpdated)
        {
            $sql = "INSERT INTO category(categoryName, activate, timeCreated, timeUpdated) 
                    VALUES($name, $activate, $timeCreated, $timeUpdated)";
            return $this->execute($sql);        
        }
        
        public function updateData($name, $activate, $timeCreated, $timeUpdated)
        {
            $sql = "UPDATE category SET categoryName = $name, activate = $activate, timeCreated = $timeCreated, timeUpdated = $timeUpdated";
            return $this->execute($sql);
        }

        public function delete($id)
        {
            $sql = "DELETE FROM category WHERE categoryId = '$id'";
            return $this->execute($sql);
        }
    }