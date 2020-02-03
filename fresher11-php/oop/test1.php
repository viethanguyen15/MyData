<?php
    class CheckPhoneNunber
    {
        public $headNumber;
        public $number;
        public $numberExpresion = '/^[0-9]{10,11}$/';
        public $arrViettel = ['098', '097', '096', '0169', '0168', '0167', '0166', '0165', '0164', '0163', '0162'];
        public $arrVinaphone = ['091', '094', '0123', '0124', '0125', '0127', '0129'];
        public $arrMobiphone = ['090', '093', '0120', '0121', '0122', '0126'];

        function __construct($number)
        {
            $this->number = $number;
        }

        public function checkNumber()
        {
            if (preg_match($this->numberExpresion, $this->number)) {
                echo "Số điện thoại hợp lệ";
            } else {
                echo "Số đt không hợp lệ";
            }
        }

        public function checkHeadNumberViettel($headNumber)
        {
            if (in_array($this->headNumber = $headNumber, $this->arrViettel)) {
                echo $headNumber . " là nhà mạng viettel";
            }
        }

        public function checkHeadNumberVinaphone($headNumber)
        {
            if (in_array($this->headNumber = $headNumber, $this->arrVinaphone)) {
                echo $headNumber . " là nhà mạng Vinaphone";
            } 
        }

        public function checkHeadNumberMobiphone($headNumber)
        {
            if (in_array($this->headNumber = $headNumber, $this->arrMobiphone)) {
                echo $headNumber . " là nhà mạng Mobiphone";
            }
        }
    }
    

    if (isset($_POST['submit'])) {
        $numberPhone = new CheckPhoneNunber($_POST['number']);
        $numberPhone->checkNumber();
        echo "<br/>";
        $numberPhone->checkHeadNumberViettel($_POST['headNumber']);
        $numberPhone->checkHeadNumberVinaphone($_POST['headNumber']);
        $numberPhone->checkHeadNumberMobiphone($_POST['headNumber']);   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <input type="text" name="number">
            <input type="text" name="headNumber">
            <input type="submit" name="submit" value="check">
        </form>
    </div>
</body>
</html>