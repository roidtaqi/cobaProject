<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'min:3'
            ],
              
            'email' => [
                'required', 'email', Rule::unique((new User)->getTable())->ignore($this->route()->user->id ?? null)
            ],

            'alamat' => [
                'required', 'min:3'
            ],

              'no_hp' => [
                'required', 'min:3'
            ],
            
            'password' => [
                $this->route()->user ? 'required_with:password_confirmation' : 'required', 'nullable', 'confirmed', 'min:6'
            ],
        ];
    }
}