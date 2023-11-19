<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;

class UserRequest extends FormRequest
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
    public function rules()
    {
        $methodName = Route::getCurrentRoute()->getActionMethod();
        
        if($methodName == 'createUser'){
            return $this->store();
        }
    }


    public function store()
    {
        return [
            "name"          => 'required|regex:/^[a-zA-Z ]+$/',
            "address"       => 'required',
            "phone"         => 'required|min:8|regex:/^0[0-9]*$/',
            "birthdate"     => 'required',
            "instagram"     => 'required',
            "email"         => 'required|unique:users,email',
            "password"      => [
                'required',
                'confirmed',
                'min:8'
            ]
        ];
    }
}
