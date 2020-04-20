<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryCreateForm extends FormRequest
{
    protected $_reqObj;

    /**
     * @param  \Illuminate\Http\Request $reqObj
     */
    public function __construct(Request $reqObj)
    {
        $this->_reqObj = $reqObj;

        parent::__construct();
    }
        
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|unique:card_categories,name|regex:/^[\pL0-9$ ()]+$/u',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator( $validator )
    {
        $validator->after(function ($validator) {
            $formErrors = $validator->errors();
            $errorMsg = '';

            foreach ($formErrors->all() as $errMsg) {
                $errorMsg .= '<li>' . $errMsg . '</li>';
            }

            if (strlen($errorMsg) > 0) {
                $this->_reqObj->session()->put(
                    'error', 
                    '<ul>' . $errorMsg . '</ul>'
                ); 
            }           
        });
    }    
}
