<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RouteResource extends JsonResource
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
            "address_origin" => AddressResource::make($this->origin),
            "address_destination_id" => AddressResource::make($this->destination),
            "next_route_id" => $this->next_route_id,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
