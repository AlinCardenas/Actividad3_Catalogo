<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
            'name' => 'required|string|alpha',
            'ranking' => 'required|integer',
            'description' => 'required|text',
            'languages' => 'required|string',
            'images' => 'required|json|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ];
    }
}
