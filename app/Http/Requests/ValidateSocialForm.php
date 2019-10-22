<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSocialForm extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'social_type' => 'required',
            'cta' => 'required',
            'ad_type' => 'required',
            'objective' => 'required',
            'page_name' => 'required',
            'url_destination' => 'required',
            'targeting' => 'required',
            'main_copy' => 'required',
            'headline' => 'required',
            'links' => 'required',
            'assets' => 'required',
        ];
    }

    /**
     * Custom FormRequest validation error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'social_type.required' => 'Social Type is required',
            'cta.required' => 'CTA required',
            'ad_type.required' => 'Ad Type is required',
            'objective.required' => 'Objective is required',
            'page_name.required' => 'Page Name is required',
            'url_destination.required' => 'URL Destination is required',
            'targeting.required' => 'Targeting is required',
            'main_copy.required' => 'Main Copy required',
            'headline.required' => 'Headline isrequired',
            'links.required' => 'Links are equired',
            'assets.required' => 'Assets are required',
        ];
    }
}
