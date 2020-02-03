<?php
    class UserModel extends Database
    {
        public function getAllUser()
        {
            $sql = "SELECT * FROM user ORDER BY id DESC";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                return $query;
            } else {
                return false;
            }
        }

        public function getOneUser($userId)
        {
            $sql = "SELECT * FROM user WHERE id = '$userId'";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                return $query;
            } else {
                return false;
            }
        }

        public function addUser($fullname, $username, $email, $password, $active)
        {
            $sql = "INSERT INTO user(fullname, username, email, password, active)
                    VALUES ('$fullname', '$username', '$email', '$password', '$active')";
            $query = mysqli_query($this->conn, $sql);
            $result = false;

            if ($query) {
                $result = true;
            } 
        }

        public function updateUser($sql)
        {
            $query = mysqli_query($this->conn, $sql);   
            if ($query) {
                return true;
            } else {
                return false;
            }
        }

        public function delete($userId)
        {
            $sql = "DELETE FROM user WHERE id = '$userId'";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                return true;
            } else {
                return false;
            }
        }

        public function active($userId)
        {
            $sql = "UPDATE user SET active = '1'
            WHERE id = '$userId'";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                return true;
            } else {
                return false;
            }
        }

        public function userNumRow()
        {
            $sql = "SELECT * FROM user"; 
            $query = mysqli_query($this->conn, $sql);
            $numRow = mysqli_num_rows($query);
            return $numRow;
        }
    }