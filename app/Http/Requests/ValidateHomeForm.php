<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateHomeForm extends FormRequest
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
            'client_name' => 'required',
            'brief_date' => 'required|date|before:tomorrow|after:yesterday',
            'brief_in_by' => 'required',
            'client_email' => 'required',
            'job_number' => 'required',
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
            'cient_name.required' => 'Client Name is required',
            'brief_date.required' => 'Date is required',
            'brief_date.after' => 'Date must be today',
            'brief_date.before' => 'Date must be today',
            'briefed_in_by.required' => 'Briefed In is required',
            'client_email.required' => 'Client Email is required',
            'job_number.required' => 'Job Number is required',
        ];
    }
}
