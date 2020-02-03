<?php
    interface AnhMy
    {
        function code();
    }

    class Ha implements AnhMy
    {
        public function code()
        {
            echo "anhmy laravel php";
        }
    }

    $ha = new Ha();
    $ha->code();

/**
 * kế thừa bằng implement
 * định nghĩa method interface cha
 * class extends lại thì dùng lại method định nghĩa tù interface
 * trong inter face không có thuộc tính, chỉ có method
 */