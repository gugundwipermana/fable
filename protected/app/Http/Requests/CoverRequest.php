<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CoverRequest extends Request
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
            'firstquote'    => 'required|max:30',
            'lastquote'     => 'required|max:30',
            'video'         => 'required|max:100',
            'music'         => '',
            'title'         => 'required|max:15',
            'band'          => 'required|max:10',
            'album'         => 'required|max:15',
            'date'          => 'required'
        ];
    }
}
