<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:255'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Can not be empty'
        ];
    }
}
