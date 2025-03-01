<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=>'required|string|email|unique:users|max:255',
            'name' => 'required|string',
            'user_catalogue_id'=> 'required|integer|gt:0',
            'password'=>'required|string|min:6',
            're_password'=> 'required|string|same:password',
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
            'password.required'=>'Bạn chưa nhập mật khẩu !',
            'password.string'=> 'Hãy nhập password gồm ít nhất 6 ký tự, trong đó có ít nhất 1 ký tự viết hoa, 1 ký tự viết thường, 1 ký tự số, 1 ký tự đặc biệt',
            'password.min'=> 'Hãy nhập password gồm ít nhất 6 ký tự, trong đó có ít nhất 1 ký tự viết hoa, 1 ký tự viết thường, 1 ký tự số, 1 ký tự đặc biệt',
            're_password.same'=> 'Nhập lại password không khớp',
            're_password.required'=> 'Nhập lại password',
        ];
    }
}
