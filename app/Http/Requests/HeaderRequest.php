<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderRequest extends FormRequest
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
            'name'=> 'required',
            'skill_01'=> 'required',
            'skill_02'=> 'required',
            'skill_03'=> 'required',
            'skill_04'=> 'required',
            'skill_05'=> 'required',
            'profile_img'=> 'required|image||dimensions:width=100,height=100',
            'bg_img'=> 'required|image||dimensions:width=1920,min_height=1280',

        ];
    }


    public function messages()
    {
        return [
            'profile_img.dimensions' => 'image-dimensions must be 100x100',
            'bg_img.dimensions' => 'Dimensions must be: width=1920,min_height=1280',
            // ..
        ];
    }
}
