<?php
    // class SinhVien {
    //     function __construct() {
    //         echo 'php team';
    //     }
    // }
    // $student = new SinhVien();

    // class SinhVien {
    //     function __construct($message) {
    //         echo $message;
    //     }
    // }
    // $student = new SinhVien('hello world');

    // class SinhVienA {
    //     function __construct() {
    //         echo 'A dc khoi tao';
    //     }
    // } 

    // class SinhVienB extends SinhVienA {
    //     // function __construct() {
    //     //     echo 'B dc khoi tao';
    //     // }
    // }

    // $studenB = new SinhVienB();
    // class SinhVien {
    //     function __construct() {
    //         echo 'day la sinh vien a';
    //     }

    //     function showInfo() {
    //         echo 'sinh vien A dang hoc bai';
    //     }

    //     function __destruct() {
    //         echo 'sinh vien A cup hoc';
    //     }
    // }

    // $sv1 = new SinhVien();
    // $sv1->showInfo();

    class SinhVienA {
        function __construct() {
            echo 'day la sinh vien A';
        }
    }

    class SinhVienB extends SinhVienA {
        function __construct() {
            parent::__construct();
            echo 'day la sinh vien B';
        }
    }

    class SinhVienC extends SinhVienA {

    }
    $sv = new SinhVienA();
    $sv = new SinhVienB();
    $sv = new SinhVienC();