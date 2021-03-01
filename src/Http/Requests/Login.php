<?php

namespace thirdly\acl\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use thirdly\acl\Models\User;

class Login extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>['email','required',Rule::exists((new User())->getTable(),'email')],
            'password'=>['required'],
            'remember_me'=>['required','boolean']
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
