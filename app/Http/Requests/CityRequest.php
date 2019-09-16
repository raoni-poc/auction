<?php

namespace App\Http\Requests;

use App\Models\City;
use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
            'ibge_code' => 'required|numeric|min:1||unique:'.(new City())->getTable().',ibge_code',
            'name' => 'required|min:3|max:255',
            'state_id' => 'required|numeric|min:1'
        ];
    }
}
