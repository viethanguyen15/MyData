<?php
    class ProductModel extends Database
    {
        public function getAllProducts()
        {
            $sql = "SELECT * FROM product ORDER BY id DESC";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                return $query;
            } else {
                return false;
            }
        }

        public function getOneProduct($productId)
        {
            $sql = "SELECT * FROM product WHERE id = '$productId'";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                return $query;
            } else {
                return false;
            }
        }

        public function addProduct($productName, $price, $description, $activate, $timeCreated)
        {
            $sql = "INSERT INTO product(productName, price, description, activate, timeCreated)
                    VALUES ('$productName', '$price', '$description', '$activate', '$timeCreated')";
            $query = mysqli_query($this->conn, $sql);
            $result = false;

            if ($query) {
                $result = true;
            } 
        }

        public function updateProduct($sql)
        {
            $query = mysqli_query($this->conn, $sql);   
            if ($query) {
                return true;
            } else {
                return false;
            }
        }

        public function delete($productId)
        {
            $sql = "DELETE FROM product WHERE id = '$productId'";
            $query = mysqli_query($this->conn, $sql);

            if ($query) {
                return true;
            } else {
                return false;
            }
        }
    }