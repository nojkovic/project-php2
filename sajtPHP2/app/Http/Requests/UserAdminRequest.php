<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAdminRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            "nameUser"=>"required|string|max:30|min:4",
            "lastnameUser"=>"required|string|max:30|min:5",
            "emailUser"=>"required|email|max:30",
            "password" => "required|min:8|confirmed",
            "activeAdmin" => "required|in:0,1",
            "rolAdmin" => "required|numeric"
        ];
    }
}
