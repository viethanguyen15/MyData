<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Users;

class UserController extends Controller
{
    function getUser() {
        //lấy ra tất cả các bản ghi dùng tênModel::all();
        //để phân trang sử dụng paginate('số bản ghi trong 1 trang')
        $data['users']=Users::paginate(10);

        return view('user',$data);
    }

    function getAddUser() {
        return view('add_user');
    }

    function postAddUser(AddUserRequest $r) {
        // dd($r->all());
        // $r->validate([
        //     'full'=>'required|min:5',
        //     'phone'=>'required|min:5|numeric',
        //     'address'=>'required|min:5',
        //     'id_number'=>'required|min:5|numeric',
        // ],[
        //     'full.required'=>'Họ Tên không được để trống',
        //     'full.min'=>'Họ Tên ít nhất 5 ký tự',
        //     'phone.required'=>'SDT không được để trống',
        //     'phone.min'=>'SDT ít nhất 5 ký tự',
        //     'phone.numeric'=>'SDT phải là số',
        //     'address.required'=>'Địa chỉ không được để trống',
        //     'address.min'=>'Địa chỉ ít nhất 5 ký tự',
        //     'id_number.required'=>'Số CMT không được để trống',
        //     'id_number.min'=>'Số CMT ít nhất 5 ký tự',
        //     'id_number.numeric'=>'Số CMT phải là số',
        // ]);

        //tạo 1 bản ghi mới
        $user=new Users;

        //gán giá trị cho các trường
        $user->full=$r->full;
        $user->phone=$r->phone;
        $user->address=$r->address;
        $user->id_number=$r->id_number;
        //lưu giá trị vào database
        $user->save();
        //đi đến trang user
        return redirect('user')->with('thongbao','Đã thêm thành công');

    }

    function getEditUser($idUser) {
        $data['user']=Users::find($idUser);   //tìm 1 bản ghi theo id
        return view('edit_user',$data);
    }

    function postEditUser(EditUserRequest $r,$idUser) {
        $user=Users::find($idUser);
        $user->full=$r->full;
        $user->phone=$r->phone;
        $user->address=$r->address;
        $user->id_number=$r->id_number;
        $user->save();
        return redirect('/user')->with('thongbao','Đã sửa thành công');
    }

    function DelUser($idUser){
        Users::find($idUser)->delete();
        return redirect('/user')->with('thongbao','Đã xóa thành công');

    }

    function SearchUser(request $r){

        $data['users']=Users::where('full','like','%'.$r->search.'%')->paginate(15);
        return view('user',$data);
    }
}
