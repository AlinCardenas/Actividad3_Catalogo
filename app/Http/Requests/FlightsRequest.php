<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightsRequest extends FormRequest
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
            'leave_date' => 'required|date',
            'arrive_date' => 'required|date',
            'count_clients' => 'required|integer',
            'duration' => 'required|date_format:H:i:s',
            'price' => 'required|numeric|min:0',
            'type_lunggage' => 'required|string',
            'plane_id' => 'required|integer|unsigned',
            'airline_destination_id' => 'required|integer|unsigned',
        ];

        
    }
}
