<?php
    class Database
    {
        public $conn;
        public $serverName = 'localhost';
        public $userName = 'root';
        public $password = '';
        public $dbName = 'side_admin';

        function __construct()
        {
            $this->conn = mysqli_connect($this->serverName, $this->userName, $this->password);
            mysqli_select_db($this->conn, $this->dbName);
            mysqli_query($this->conn, "SET NAMES 'utf8'");
        }
        public function select($sql)
        {
            $result = mysqli_query($this->conn,$sql);
            $row = mysqli_num_rows($result);
            if($row >0){
                return true;
            }
            return false;
        }
    }  