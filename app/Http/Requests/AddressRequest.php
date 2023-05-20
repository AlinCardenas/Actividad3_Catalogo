<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'street' => 'required|string|max:255',
            'number' => 'required|string|max:6',
            'cp' => 'required|string|max:10',
            'state' => 'required|string|max:255',
            'phone' => 'required|string|max:10',
            
        ];
    }

    public function attributes()
    {
        return [
            'street' => 'calle',
            'number' => 'número de localidad',
            'cp' => 'código postal',
            'state' => 'estado',
            'phone' => 'número telefonico'
        ];
    }
}
