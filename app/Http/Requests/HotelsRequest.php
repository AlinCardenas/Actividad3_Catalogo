<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelsRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'ranking' => 'required',
            'description' => 'required',
            'logo' => 'required|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'image' => 'required|array',
            'image.*' => 'mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'service_id' => 'required',
            'destino_id'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del hotel',
            'price' => 'precio por habitacón',
            'ranking' => 'evaluación del hotel',
            'description' => 'descripción del hotel',
            'logo' => 'logo del hotel',
            'image' => 'imagenes del hotel',
            'service_id' => 'servicio del hotel',
            'address_id' => 'dirección del hotel'
        ];
    }
}
