<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class StoreEditPigeonValidation extends FormRequest
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
            'ring_number' => 'required', 'string', 'max:15','unique:pigeons,ring_number', Rule::unique('pigeons')->ignore($this->id),
            'sex'        => 'required', 'string', 'max:2',
            'color'      => 'required', 'numeric', 'max:2',
            'category'   => 'required', 'string',
        ];
    }

    public function messages(){
    return [
        'ring_number.required' => 'Nr. Obrączki jest wymagany!',
        'ring_number.max' => 'Za gługa ilość znaków. (max. 15)',
        'ring_number.unique' => 'Taki gołąb już istnieje',
        ];
    }  
}
