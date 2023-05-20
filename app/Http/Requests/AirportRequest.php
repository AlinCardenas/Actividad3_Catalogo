<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirportRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'cant' => 'required|string|max:10',
            'address_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del aeropuerto',
            'cant' => 'cantidad de pistas del aeropuerto',
            'address_id' => 'dirección del aeropuerto'
        ];
    }
}
