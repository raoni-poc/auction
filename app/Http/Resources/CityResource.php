<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
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
            "ibge_code" => $this->ibge_code,
            "name"=>  $this->name,
            "state" => [
                'id' => $this->state_id,
                'abbreviation' => $this->state->abbreviation
            ],
            "created_at"=> $this->created_at,
            "updated_at"=> $this->updated_at
        ];
        return parent::toArray($request);
    }
}
