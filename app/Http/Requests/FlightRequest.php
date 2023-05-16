<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightRequest extends FormRequest
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
            'leave_date' => 'required|date',
            'arrive_date' => 'required|date',
            'count_clients' => 'required|integer|min:1',
            'duration' => 'required|time',
            'price' => 'required|numeric|min:0',
            'type_lunggage' => 'required|string|max:255',
            'plane_id' => 'required|exists:planes,id',
            'airline_destination_id' => 'required|exists:airline_destinations,id',
        ];
    }
}
