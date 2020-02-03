<?php
    class CategoryModel extends Database
    {
        public function getAllCategories()
        {
            $sql = "SELECT * FROM category ORDER BY id DESC";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                return $query;
            } else {
                return false;
            }
        }

        public function getOneCategory($CategoryId)
        {
            $sql = "SELECT * FROM category WHERE id = '$CategoryId'";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                return $query;
            } else {
                return false;
            }
        }

        public function addCategory($categoryName, $active, $timeCreated)
        {
            $sql = "INSERT INTO category(categoryName, activate, timeCreated)
                    VALUES ('$categoryName', '$active', '$timeCreated')";
            $query = mysqli_query($this->conn, $sql);
            $result = false;

            if ($query) {
                $result = true;
            } 
        }

        public function updateCategory($sql)
        {
            $query = mysqli_query($this->conn, $sql);   
            if ($query) {
                return true;
            } else {
                return false;
            }
        }

        public function delete($categoryId)
        {
            $sql = "DELETE FROM category WHERE id = '$categoryId'";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                return true;
            } else {
                return false;
            }
        }
    }