<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class SkillRequest extends FormRequest
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
            'skill'=> 'required',
            'percentage'=> 'required',
            'skill_type'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'skill.required' => 'Skill is required',
            'percentage.required' => 'Percentage is required',
            'skill_type.required' => 'Skill type is required',
        ];
    }
}
