<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Usereditrequest extends Request
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
            //
            'name'=>'required',
            'email'=>'email',
            'role_id'=>'required',
            //'is_active'=>'required',

        ];
    }
}
