<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirlineRequest extends FormRequest
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
            'description' => 'required|string',
            'ranking' => 'required|integer|min:1|max:10',
            'logo' => 'required|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ];
    }

    public function attributes()
    {
        return[
            'name' => 'nombre de la aerolinea',
            'description' => 'descripción de la aerolinea',
            'ranking' => 'evaluación de la aerolinea',
            'logo' => 'logo de la aerolinea'
        ];
    }
}
