<?php
    class CheckNumber{
        public $number;
        public $strRegEx = '/[0-9]{10,11}/';
        public $strHeadNumber;
        public $headNumberPhone = '';

        public function getNumberPhone($number)
        {
            if (!preg_match($this->strRegEx, $this->number = $number)) {
                throw new Exception("invalid phone number");
            }
        }

        public function getLengthNumberPhone()
        {
            if (strlen($this->number) == 10) {
                $this->strHeadNumber = '/^0\d{2}/';
            } else {
                $this->strHeadNumber = '/^0\d{3}/';
            }
        }

        public function getHeadNumber()
        {
            if (preg_match($this->strHeadNumber, $this->number, $matches)) {
                $this->headNumberPhone = $matches[0];
            }
        }

        public function getViettel()
        {
            return array('098', '097', '096', '0169', '0168', '0167', '0166', '0165', '0164', '0163', '0162');
        }

        public function getVinaphone()
        {
            return array('091', '094', '0123', '0124', '0125', '0127', '0129');
        }

        public function getMobiphone()
        {
            return array('090', '093', '0120', '0121', '0122', '0126', '0128');
        }

        public function getProvider()
        {
            if (in_array($this->headNumberPhone, $this->getViettel())) {
                return "viettel";
            }
            if (in_array($this->headNumberPhone, $this->getVinaphone())) {
                return "vinaphone";
            }
            if (in_array($this->headNumberPhone, $this->getMobiphone())) {
                return "mobiphone";
            }

            throw new Exception("Does not belong to any network");
            
        }
    }
?>

<form action="" method="post">
    <?php
        if (isset($_POST['submit'])) {
            $checkNumber = new CheckNumber();
            $number = $_POST['number'];

            try {
                $checkNumber->getNumberPhone($number);
                echo 'so dt hop le';
            } catch (Exception $e) {
                echo $e->getMessage() . '<br/>';
            }

            try {
                echo $checkNumber->getProvider();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    ?>
    <input type="text" name="number">
    <input type="submit" name="submit">
</form>