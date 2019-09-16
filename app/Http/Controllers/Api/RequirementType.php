<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RequirementTypeRequest;
use App\Http\Resources\RequirementTypeResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequirementType extends Controller
{
    public function index(Request $request)
    {
        $address = RequirementType::paginate();
        return RequirementTypeResource::collection($address);
    }

    public function store(RequirementTypeRequest $request)
    {
        $address = RequirementType::create($request->all());
        $address->refresh();
        return new RequirementTypeResource($address);
    }

    public function show(RequirementType $address)
    {
        return new RequirementTypeResource($address);
    }

    public function update(RequirementTypeRequest $request, RequirementType $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new RequirementTypeResource($address);
    }

    public function destroy(RequirementType $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
