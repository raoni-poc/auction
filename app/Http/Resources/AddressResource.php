<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "city" => [
                'id' => $this->city->id,
                'name' => $this->city->name
            ],
            "number" => $this->number,
            "zip_code" => $this->zip_code,
            "neighborhood" => $this->neighborhood,
            "complement" => $this->complement,
            "note" => $this->note,
            "address" => $this->address,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
