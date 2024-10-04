<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservationLineRequest extends FormRequest
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
        $threeMonthsFromNow = now()->addMonths(3)->format('Y-m-d');
        return [
            'id_user' => 'nullable|numeric',
            'date' => [
                'nullable',
                'date_format:Y-m-d',
                "after_or_equal:" . now()->format('Y-m-d'),
                "before_or_equal:{$threeMonthsFromNow}",
            ],
            'id_gallery' => 'nullable|numeric',
        ];
    }
}
