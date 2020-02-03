<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Users;
class UserController extends Controller
{
    function getUser() {
        //lay ra tat ca cac ban ghi dung ten model::all();
        // $user = Users::all();
        // echo dd($user);
        // $data['users'] = Users::all();
        //phan trang cho users
        $data['users'] = Users::paginate(5);
        return view('user', $data);
    }

    function getAddUser() {
        return view('add_user');
    }

    function getEditUser() {
        return view('edit_user');
    }
}
