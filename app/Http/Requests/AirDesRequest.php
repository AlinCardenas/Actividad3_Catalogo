<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirDesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'destination_id' => 'required|exists:destinations,id',
            'airport_id' => 'required|exists:airports,id',
            'airline_id' => 'required|exists:airlines,id',
        ];
    }
}
