<?php
    class CheckNumberPhone
    {
        public $string = '/(09|01[2|6|8|9])+([0-9]{8})\b/';
        public $numberPhone = '';
        public $check = '';
        public $stringHeadNumber = '';
        public $headNumberPhone = '';
    
        public function getNumberPhone($number)
        {
            if (preg_match($this->string, $this->numberPhone = $number)) {
                $this->check = true;
                return "<p style='color:green'>Số điện thoại hợp lệ</p>";
            } else {
                $this->check = false;
                return "<p style='color:red'>Số điện không thoại hợp lệ</p>";
            }
    
        }
    
        public function getLengNumberPhone()
        {
            if (strlen($this->numberPhone) == 10) {
                $this->stringHeadNumber = '/^0\d{2}/';
            } else {
                $this->stringHeadNumber = '/^0\d{3}/';
            }
        }
    
        public function getHeadNumber()
        {
            if(preg_match($this->stringHeadNumber, $this->numberPhone, $match))
            $this->headNumberPhone = $match[0];
        }
    
        public function getProvider()
        {
            $this->getLengNumberPhone();
            $this->getHeadNumber();
            if (in_array($this->headNumberPhone, $this->getViettel()))
            {
                return "Nhà mạng viettel";
            }
            elseif (in_array($this->headNumberPhone, $this->getVinaphone()))
            {
                return "Nhà mạng vinaphone";
            }
            elseif (in_array($this->headNumberPhone, $this->getMobiphone()))
            {
                return "Nhà mạng mobiphone";
            }
        }
    
        public function getViettel(){
            return array('098', '097', '096', '0169', '0168', '0167', '0166', '0165', '0164', ' 0163', '0162');
        }
    
        public function getVinaphone(){
            return array('091', '094', '0123', '0124', '0125', '0127', '0129');
        }
    
        public function getMobiphone(){
            return array('090', '093', '0120', '0121', '0122', '0126', '0128');
        }
    }
    
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script
                src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
    <form action="" method="POST">
        <table border="1" cellpadding="9" cellspacing="0" align="center">
            <tr>
                <td colspan="2" align="center">Check your Number Phone</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="number" placeholder="Nhập số điện thoại">
                <td>
                    <input type="submit" name="submit" value="Kiểm tra">
                </td>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">Thông tin</td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <?php
                    if (isset($_POST['submit']))
                    {
                        $checkNumber = new CheckNumberPhone();
                        $numberPhone = $_POST['number'];
                        echo $checkNumber->getNumberPhone($numberPhone);
                        if ($checkNumber->check)
                        {
                            echo "<br/>";
                            echo "<p style='color:Blue'>{$checkNumber->getProvider()}</p>";
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
    </body>
    </html>
    <script>
        $(document).ready(function () {
            window.history.replaceState('', '', window.location.href)
        });
    </script>
    