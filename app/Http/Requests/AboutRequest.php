<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'subtitle' => 'required|string|max:255',
            'short_description' => 'required|string|max:300',
            'birth' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'freelance' => 'required|string|max:255',
            'long_description' => 'required|string|max:500',
        ];
    }
}
