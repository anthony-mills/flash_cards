<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class CategoryCreateForm extends FormRequest
{
    /** @var Request $reqObj */
    protected Request $reqObj;

    /** @param Request $reqObj */
    public function __construct(Request $reqObj)
    {
        $this->reqObj = $reqObj;

        parent::__construct();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'name' => 'required|min:2|unique:card_categories,name|regex:/^[\pL0-9$ ()]+$/u',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param Validator $validator
     * @return void
     */
    public function withValidator(Validator $validator) : void
    {
        $validator->after(function ($validator) {
            $formErrors = $validator->errors();
            $errorMsg = '';

            foreach ($formErrors->all() as $errMsg) {
                $errorMsg .= '<li>' . $errMsg . '</li>';
            }

            if (strlen($errorMsg) > 0) {
                $this->reqObj->session()->put(
                    'errors',
                    '<ul>' . $errorMsg . '</ul>'
                );
            }
        });
    }
}
