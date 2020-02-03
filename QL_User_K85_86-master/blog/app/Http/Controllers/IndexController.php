<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function getUser($a,$b) {
        echo "đây là trang user $a <br>";
        echo "dia chi $b";
    }
}
