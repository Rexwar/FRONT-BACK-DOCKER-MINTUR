<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEstablishmentRequest extends FormRequest
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
            'establishmentType'=>'required',
            'ruc'=>'required',
            'typeOfTaxpayer'=>'required',
            'province'=>'required',
            'canton'=>'required',
            'parrish'=>'required',
            'direction'=>'required',
            'startYearOperations'=>'required',
            'hasRegisterTourist'=>'required',
            'registerNumber'=>'required_if:hasRegisterTourist,==,true',
        ];
    }
}
