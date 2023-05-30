<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Bookrequest extends FormRequest
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
            'author' => 'required',
            'name' => 'required|string',
            'pages' => 'numeric',
            'year' => 'required|numeric',
            'image' => 'mimes:bmp,png,jpeg, jpg',
        ];
    }
}
