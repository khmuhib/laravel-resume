<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ];
    }
    
    public function messages() 
    {
        return [
            'title.required' => 'The title is required.',
            'company.required' => 'The company is required.',
            'location.required' => 'The location is required.',
            'from.required' => 'The from date is required.',
            'to.required' => 'The to date is required.',
            'description.required' => 'The description is required.',
        ];
    }
}
