<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        $id = $this->route('users');
		return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required|confirmed|alpha_num|min:6'
		];
	}
}
