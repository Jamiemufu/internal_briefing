<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateBasicForm extends FormRequest
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
            'campaign_name' => 'required',
            'budget' => 'required',
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after:start_date',
            'budget_type' => 'required',
            'campaign_type' => 'required',
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
            'campaign_name.required' => 'Campaign Name is required',
            'budget.required' => 'Budget is required',
            'start_date.required' => 'Start Date is required',
            'start_date:after' => 'Start date must be in the future',
            'end_date.required' => 'End date is required',
            'end_date.after' => 'End Date must be after Start Date',
            'budget_type.required' => 'Budget Type is required',
            'campaign_type.required' => 'Campaign Type is required',
        ];
    }
}
