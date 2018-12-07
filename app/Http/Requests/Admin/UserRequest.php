<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()){
            case "POST":
                return [
                    'name' => 'required|string|min:3|max:16',
                    'email' => 'required|email',
                    'email_verified_at' => 'date_format:Y-m-d H:i:s|nullable',
                    'password' => 'required|string|min:6',
                    'remember_token' => 'string|nullable'
                ];

                break;
            case "PUT":
                return [
                    'name' => 'required|string|min:3|max:16',
                    'email' => 'required|email',
                    'email_verified_at' => 'date_format:Y-m-d H:i:s|nullable',
                    'password' => 'string|min:6|nullable',
                    'remember_token' => 'string|nullable'
                ];
        }
    }
}
