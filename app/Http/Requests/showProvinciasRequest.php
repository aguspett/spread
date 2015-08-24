<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class showProvinciasRequest extends Request
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
       // dd($this->all());
        return [
            'paises_list' => "exists:paises,id",
            'provincias_list'=> "exists:provincias,id"
        ];
    }
}
