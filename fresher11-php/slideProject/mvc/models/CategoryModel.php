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
    }