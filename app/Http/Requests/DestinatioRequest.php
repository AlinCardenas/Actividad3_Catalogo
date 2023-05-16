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
            'ranking' => 'required|integer|min:1|max:2',
            'description' => 'required|string',
            'languages' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ];

    }

    public function messages()
    {
        return[
            'name.max' => "El campo debe tener menos de 30 caracteres",
            'name.string' => "El campo debe ser de tipo texto",
            'name.required' => "El campo debe ser completado",
            
        ];
    }
}
