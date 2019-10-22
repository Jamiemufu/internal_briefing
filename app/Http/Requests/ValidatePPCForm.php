<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePPCForm extends FormRequest
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
            'website_url' => 'required',
            'url_destination' => 'required',
            'number_of_ads' => 'required',
            'ad_type' => 'required',
            'analytics' => 'required',
            'format' => 'required',
            'objectives' => 'required',
            'assets' => 'required',
            'main_offer' => 'required',
            'headline_1' => 'required|max:30',
            'headline_2' => 'required|max:30',
            'headline_3' => 'required|max:30',
            'desc_1' => 'required|max:90',
            'desc_2' => 'required|max:90',
            'cta' => 'required',
            'site_extensions' => 'required',
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
            'website_url.required' => 'Website URL is required',
            'url_destination.required' => 'URL Destination is required',
            'number_of_ads.required' => 'Number of Ads is required',
            'ad_type.required' => 'Ad Type is required',
            'analytics.required' => 'Analytics is required',
            'format.required' => 'Format is required',
            'objectives.required' => 'Objectives is required',
            'assets.required' => 'Assets is required',
            'main_offer.required' => 'Main Offer is required',
            'headline_1.max' => 'Headline 1 has a character limit of 30',
            'headline_2.max' => 'Headline 2 has a character limit of 30',
            'headline_3.max' => 'Headline 3 has a character limit of 30',
            'headline_1.required' => 'Headline 1 is required',
            'headline_2.required' => 'Headline 2 is required',
            'headline_3.required' => 'Headline 3 is required',
            'desc_1.required' => 'Description 1 is required',
            'desc_2.required' => 'Description 2 is required',
            'desc_1.max' => 'Description 1 has a character limit of 90',
            'desc_2.max' => 'Description 2 has a character limit of 90',
            'cta.required' => 'CTA is required',
            'site_extensions.required' => 'Site Extensions is required',
        ];
    }
}
