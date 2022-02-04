<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class InvestmentStoreRequest extends FormRequest
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
            'company_name' => 'required|string',
            'company_image' => 'required|image',
            'owner_name' => 'required|string',
            'category_id' => 'required|exists:investment_categories,id',
            'one_year_ago' => 'required|numeric',
            'two_year_ago' => 'required|numeric',
            'dividen' => 'required|numeric|between:1,100',
            'public_stock' => 'required|integer',
            'profit_prediction' => 'required|numeric',
            'needed_fund' => 'required|numeric',
            'video_profile' => 'nullable|url',
            'instagram' => 'sometimes',
            'facebook' => 'sometimes',
            'company_website' => 'nullable|url',
            'linkedin' => 'sometimes',
            'caption' => 'required',
            'company_address' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        return redirect()->back()->withInput()->withErrors($validator->errors());
    }
}
