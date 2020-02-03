<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //kết nối đến bảng user
    protected $table='users';


    //khai báo bảng không có trường thời gian
    // public $timestamps=false;
}
