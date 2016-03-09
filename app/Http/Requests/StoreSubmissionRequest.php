<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreSubmissionRequest extends Request
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
            'name' => 'required',
            'message' => 'required',
            'locale' => 'required|in:en,mt',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('stalko.validation.name.required'),
            'message.required' => trans('stalko.validation.message.required'),
            'locale.required' => trans('stalko.validation.locale.required'),
            'locale.in' => trans('stalko.validation.locale.in'),
        ];
    }
}
