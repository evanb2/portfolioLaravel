<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdventureRequest extends Request
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
            'trail_name' => 'required',
            'rating' => 'required',
            'difficulty' => 'required',
            'description' => 'required',
            'directions' => 'required',
            'length' => 'required',
            'is_loop' => 'required',
            'hiked_on' => 'required|date'
        ];
    }
}
