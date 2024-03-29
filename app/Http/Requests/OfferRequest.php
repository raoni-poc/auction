<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'route_id' => 'required|min:1|numeric',
            'cargo_id' => 'required|min:1|numeric',
            'offer_type_id' => 'required|min:1|numeric',
            'start_price' => 'required|numeric',
        ];
    }
}
