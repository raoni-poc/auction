<?php

namespace App\Http\Requests;

use App\Models\AccountStatus;
use Illuminate\Foundation\Http\FormRequest;

class AccountStatusRequest extends FormRequest
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
            'name' => 'required|min:3|max:50|unique:' . (new AccountStatus())->getTable() . ',name' . $id,
        ];
    }

    private function getIdForUniqueValidation()
    {
        $route = $this->route('account_status');
        return ($route && $route->id) ? $id = ",{$route->id}" : $id = '';
    }
}
