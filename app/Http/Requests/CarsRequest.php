<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsRequest extends FormRequest
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
            'brand'=>'required|string|min:2',
            'model'=>'required|string|min:2',
            'year'=>'required|integer',
            'isAutomatic'=>'required|boolean',
            'engine'=>'required|string',
            'numberOfDoors'=>'required|integer|between:2,5',
            'maxSpeed'=>'numeric|between:20,300'
        ];
    }
}