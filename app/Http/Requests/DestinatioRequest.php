<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinatioRequest extends FormRequest
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
            'name' => 'required|string|max:30',
            'ranking' => 'required|integer|max:10',
            'description' => 'required|string',
            'languages' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'address_id' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del destino',
            'ranking' => 'valoración del detino',
            'description' => 'descripción del destino',
            'languages' => 'idiomas',
            'images' => 'imagenes del destino',
            'address_id' => 'dirección'
        ];
    }
}
