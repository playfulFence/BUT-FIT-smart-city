<?php

namespace App\Http\Requests\Registration;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'lastname'  => 'required|string',
            'email' => 'required|email:rfc|unique:App\Models\User,email',
            'password' => 'required|confirmed',
            'birthday'  => 'nullable|date',
            'phone'  => 'nullable|digits_between:0,15|unique:App\Models\User,phone'
        ];
    }
}
