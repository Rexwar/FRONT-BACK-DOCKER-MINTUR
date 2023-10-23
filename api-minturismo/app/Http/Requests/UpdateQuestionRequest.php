<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateQuestionRequest extends FormRequest
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
            'code' => [
                'required','alpha_dash', 'alpha_num', 'max:5',
                Rule::unique('questions')->ignore($this->id)
                    ->whereNull('deleted_at')
            ],
            'name' => 'required',
            'type'=>'required',
            'children_type'=>'required_if:type,==,relacionada'
        ];

    }
}
