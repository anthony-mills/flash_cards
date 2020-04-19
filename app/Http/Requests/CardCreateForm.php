<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardCreateForm extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category' => 'required|numeric',
            'problem' => 'regex:/^[\pL0-9$ ()]+$/u|required|max:250',
            'solution' => 'regex:/^[\pL0-9$ ()]+$/u|required|max:250',                        
        ];
    }
}
