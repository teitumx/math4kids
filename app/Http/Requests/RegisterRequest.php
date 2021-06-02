<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{

    public function rules()
    {
        return [
            'first_name' => 'required|string|min:2|max:127',
            'last_name' => 'required|string|min:2|max:127',
            'login' => 'required|string|unique:users|min:4|max:20',
            'password' => 'required|string|confirmed|min:4|max:20',
            'birthday' => 'required|date',
            'avatar' => 'nullable'
        ];
    }
}
