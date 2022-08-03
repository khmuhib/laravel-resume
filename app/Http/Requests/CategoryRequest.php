<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'The category field is required.',
            'category.string' => 'The category field must be a string.',
            'category.max' => 'The category field may not be greater than 255 characters.',
        ];
    }
}
