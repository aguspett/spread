<?php

namespace App\Http\Requests;

class provinciasRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(
    )
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(
    )
    {

        return [
            'name' => 'required|unique:paises|min:3',
            'pais_id' => 'exists:paises,id'
        ];

    }
}
