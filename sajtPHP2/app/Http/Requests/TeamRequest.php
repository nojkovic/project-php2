<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'nameTeam' => 'required|string|min:3|max:20',
            'lastnameTeam' => 'required|string|min:4|max:25',
            'descriptionTeam' => 'required|string|min:3|max:100',
            'imageTeam' => 'required|image|mimes:jpeg,png|max:2048'
        ];
    }
}
