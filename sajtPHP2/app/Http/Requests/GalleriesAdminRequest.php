<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleriesAdminRequest extends FormRequest
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
            'name' => 'required|string|max:40',
            'year' => 'required|integer',
            'month' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png|max:2048',
            'id_category' => 'required|numeric'
        ];
    }
}
