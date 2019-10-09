<?php

namespace App\Http\Requests;

use App\Models\RequirementType;
use Illuminate\Foundation\Http\FormRequest;

class RequirementTypeRequest extends FormRequest
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
        $id = $this->getIdForUniqueValidation();
        return [
            'name' => 'required|min:1|max:255|unique:' . (new RequirementType())->getTable() . ',name' . $id,
        ];
    }

    private function getIdForUniqueValidation()
    {
        $route = $this->route('requirement_type');
        return ($route && $route->id) ? $id = ",{$route->id}" : $id = '';
    }
}
