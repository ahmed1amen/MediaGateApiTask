<?php

namespace App\Http\Requests\API;

use App\Http\APIRequest;
use App\Models\User;

class UpdateUserAPIRequest extends APIRequest
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


            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required|string|min:6|max:10'

        ];
    }
}
