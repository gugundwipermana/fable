<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DjRequest extends Request
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
            'name'          => 'required|max:30',
            'title'         => 'required|max:50',
            'description'   => 'required',
            'facebook'      => 'max:100',
            'twitter'       => 'max:100',
            'instagram'     => 'max:100',
            'image'         => '',
            'background'    => ''
        ];
    }
}
