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
            'count_clients' => 'required',
            'duration' => 'required',
            'price' => 'required|integer',
            'plane_id' => 'required|exists:planes,id',
            // 'airline_destination_id' => 'required|exists:airline_destinations,id',
            
        ];
    }
}
