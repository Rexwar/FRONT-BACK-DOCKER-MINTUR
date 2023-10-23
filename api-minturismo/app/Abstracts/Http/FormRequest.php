<?php

namespace App\Abstracts\Http;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;
use Illuminate\Support\Arr;
use Illuminate\Validation\Validator;

abstract class FormRequest extends BaseFormRequest
{
    /**
     * Determine if the given offset exists.
     *
     * @param  string  $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return Arr::has(
            $this->route() ? $this->all() + $this->route()->parameters() : $this->all(),
            $offset
        );
    }

    /**
     * Configure the validator instance.
     *
     * @param Validator $validator
     *
     * @return void
     */
    public function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) {
            if($validator->failed()){
                $validator->errors()->add('validated', ' ');
            }
        });
    }
}
