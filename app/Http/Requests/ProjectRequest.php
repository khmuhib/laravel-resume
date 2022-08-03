<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'description' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'client' => 'required|string|max:255',
            'project_date' => 'required|string|max:255',
            'project_url' => 'required|string|max:255',
            'img_01' => 'required||dimensions:width=1288,height=600',
            'img_02' => 'required||dimensions:width=1288,height=600',
            'img_03' => 'required||dimensions:width=1288,height=600',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'category_id.required' => 'Category is required',
            'client.required' => 'Client is required',
            'project_date.required' => 'Project date is required',
            'project_url.required' => 'Project url is required',
            'img_01.required' => 'Image 1 is required',
            'img_02.required' => 'Image 2 is required',
            'img_03.required' => 'Image 3 is required',
            'img_01.dimensions' => 'Image 1 must be at least 1288px wide and 600px tall',
            'img_02.dimensions' => 'Image 2 must be at least 1288px wide and 600px tall',
            'img_03.dimensions' => 'Image 3 must be at least 1288px wide and 600px tall',

        ];
    }
}
