<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class AddReservationLineRequest extends FormRequest
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
            'id_user' => 'required|numeric',
            'date' => [
                'required',
                'date_format:Y-m-d',
                "after_or_equal:" . now()->format('Y-m-d'),
                "before_or_equal:{$threeMonthsFromNow}",
            ],
            'id_gallery' => 'required|numeric',
        ];
    }
}
