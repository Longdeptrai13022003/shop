<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'email'=>'required|string|email|unique:users,email,'.$this->id.'|max:255',
            'name' => 'required|string',
            'user_catalogue_id'=> 'required|integer|gt:0',
        ];
    }
    public function messages(): array{
        return [
            'email.required'=>'Bạn chưa nhập email !',
            'email.email'=>'Email không đúng định dạng. Eg: abcd@gmail.com',
            'email.unique'=>'Email này đã được sử dụng. Hãy sử dụng email khác',
            'email.string'=> 'Email phải ở dạng ký tự',
            'email.max'=> 'Độ dài email tối đa 255 ký tự',
            'name.required'=>'Bạn chưa nhập tên người dùng !',
            'name.string'=> 'Họ tên phải ở dạng ký tự',
            'name.max'=> 'Họ tên tối đa 255 ký tự',
            'user_catalogue_id.required'=> 'Hãy chọn nhóm thành viên',
        ];
    }
}
