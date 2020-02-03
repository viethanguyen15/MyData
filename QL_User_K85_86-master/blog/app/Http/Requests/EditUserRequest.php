<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full'=>'required|min:5',
            'phone'=>'required|min:5|numeric|unique:users,phone,'.$this->idUser,
            'address'=>'required|min:5',
            'id_number'=>'required|min:5|numeric',
        ];
    }

    public function messages()
    {
        return [
            'full.required'=>'Họ Tên không được để trống',
            'full.min'=>'Họ Tên ít nhất 5 ký tự',
            'phone.required'=>'SDT không được để trống',
            'phone.unique'=>'SDT đã tồn tại',
            'phone.min'=>'SDT ít nhất 5 ký tự',
            'phone.numeric'=>'SDT phải là số',
            'address.required'=>'Địa chỉ không được để trống',
            'address.min'=>'Địa chỉ ít nhất 5 ký tự',
            'id_number.required'=>'Số CMT không được để trống',
            'id_number.min'=>'Số CMT ít nhất 5 ký tự',
            'id_number.numeric'=>'Số CMT phải là số',
        ];
    }
}
