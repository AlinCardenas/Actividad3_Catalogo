<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaneRequest extends FormRequest
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
            'cant' => 'required|integer|min:1',
            'model' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            
        ];
    }

    public function attributes()
    {
        return [
            'cant' => 'capacidad de pasajeros',
            'model' => 'modelo del avion',
            'type' => 'tipo de avión',
            'class' => 'clase general del avión'
        ];
    }
}
