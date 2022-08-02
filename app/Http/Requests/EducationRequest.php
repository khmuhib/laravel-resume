<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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
            'degree' => 'required',
            'institute' => 'required',
            'session' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'degree.required' => 'The degree field is required.',
            'institute.required' => 'The institution field is required.',
            'session.required' => 'The session field is required.',
            'description.required' => 'The description field is required.',
        ];
    }
}
