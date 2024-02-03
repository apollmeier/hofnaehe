<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLocationRequest extends FormRequest
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
     * @return array<string, array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'street' => 'required|max:64',
            'zipcode' => 'required|numeric|digits:5',
            'city' => 'required|max:64',
            'website' => 'nullable|url|max:128',
            'email' => 'nullable|email|max:128',
            'phone' => 'nullable|max:32',
        ];
    }
}
