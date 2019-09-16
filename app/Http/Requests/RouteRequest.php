<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RouteRequest extends FormRequest
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
            'address_origin_id' => 'required|numeric|min:1',
            'address_destination_id' => 'required|numeric|min:1',
            'next_route_id' => 'numeric|min:1',
        ];
    }
}
