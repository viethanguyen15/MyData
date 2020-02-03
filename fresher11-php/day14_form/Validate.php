<?php
    class Validate
    {
        public $patternName = '/^[0-9a-zA-Z]{5,20}$/';

        public function getValidate()
        {
            if (isset($_POST['submit'])) {
                try {
                    if (empty($_POST['name'])) {
                        throw new Exception("name is not empty");                       
                    } else {
                        if (!preg_match($this->patternName, $_POST['name'], $matches)) {
                            throw new Exception("your name is not correct");
                            
                        } else {
                            return $matches[0];                          
                        }
                    }
                } catch (Exception $e) {
                    echo 'message: ' . $e->getMessage();
                }           
            } 
        }

    }

    $validate = new Validate();
    echo $validate->getValidate();
?>

<form action="" method="post">
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>