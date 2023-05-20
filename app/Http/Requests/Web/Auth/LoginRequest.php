<?php

namespace App\Http\Requests\Web\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
            'remember' => ['nullable', 'boolean'],
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     */
    public function attributes(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
            'remember' => 'Ingat Saya',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Masukkan email anda.',
            'email.email' => 'Masukkan email yang valid.',
            'password.required' => 'Masukkan password anda.',
            'remember.boolean' => 'Remember Me harus berupa check / uncheck',
        ];
    }
}
