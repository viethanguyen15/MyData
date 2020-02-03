<?php
    // if (preg_match('/^[0-9]+$/', '123', $maches)){
    //     var_dump($maches);
    // }

    // if (preg_match('/^[a-z]+$/', 'thehalfheart', $maches)){
    //     var_dump($maches);
    // } 

    // $pattern = '/abc/';
    // $subject = 'abc';
    // if (preg_match($pattern, $subject)) {
    // echo 'Chuỗi regex so khớp';
    // }


// Pattern là chữ số từ 3 đến 10 ký tự
// $pattern = '/^[0-9]{3,10}$/';
// $subject = '3232';
// if (preg_match($pattern, $subject)){
//     echo 'Chuỗi regex so khớp';
// }

// Pattern là chữ số từ 3 đến 10 ký tự
// $pattern = '/^[0-9]{3,3}$/';
// $subject = '323';
// if (preg_match($pattern, $subject)){
//     echo 'Chuỗi regex so khớp';
// } else {
//     echo 'none';
// }

// Gom nhóm A hoặc B lại thành 1 nhóm
// $pattern = '/(A|B)/';
// $subject = 'A';
// if (preg_match($pattern, $subject, $maches)){
//     echo 'Chuỗi regex so khớp';

//     var_dump($maches);
// }
// Chuoi không có ký tự số
$pattern = '/[^0-9]{1,2}/';
$subject = '4';
if (preg_match($pattern, $subject)){
    echo 'Chuỗi regex so khớp';
} else {
    echo 'none';
}
