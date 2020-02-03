<?php
    class CheckNumber
    {
        public $number;
        public $strRegEx = '/[0-9]{10,11}/';

        public function getValueFormSubmit()
        {
            if (isset($_POST['submit'])) {
                return $_POST['number'];
            } else {
                return '';
            }
        }

        public function checkNumber()
        {
            if (preg_match($this->strRegEx, $this->getValueFormSubmit())) {
                try {
                    if () {
                        
                    }
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }
    }
?>

<form action="" method="post">
    <input type="text" name="number">
    <input type="submit" name="submit">
</form>

