<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'لطفا نام کامل خود را وارد نمایید.',
            'email.required' => 'لطفا ایمیل خود را وارد نمایید. ',
            'email.email' => 'ایمیل وارد شده معتبر نمیباشد',
            'password.required' => 'رمز عبور خود را وارد نمایید.',
            'password.min' => 'رمز عبور باید بیشتر از 6 کاراکتر باشد',
            'password.max' => ' رمز عبور باید کمتر از 12کاراکتر باشد',
        ];
    }
}
