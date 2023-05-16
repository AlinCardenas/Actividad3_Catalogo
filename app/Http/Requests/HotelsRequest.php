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
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'ranking' => 'required|integer|min:1|max:2',
            'description' => 'required|text',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100,max_width=1000',
            'address_id' => 'required|exists:addresses,id',
            'service_id' => 'required|exists:services,id',
            
        ];
    }
}
