<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ReserveRequest extends Request
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
            'event_id'      => 'required|max:10',
            'name'          => 'required|max:30',
            'age'           => 'required|max:10',
            'phone'         => 'max:20',
            'email'         => 'max:50'
        ];
    }
}
