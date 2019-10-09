<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequirementTypeRequest;
use App\Http\Resources\RequirementTypeResource;
use App\Models\RequirementType;
use Illuminate\Http\Request;

class RequirementTypeController extends Controller
{
    public function index(Request $request)
    {
        $requirement = RequirementType::paginate();
        return RequirementTypeResource::collection($requirement);
    }

    public function store(RequirementTypeRequest $request)
    {
        $requirementType = RequirementType::create($request->all());
        $requirementType->refresh();
        return new RequirementTypeResource($requirementType);
    }

    public function show(RequirementType $requirementType)
    {
        return new RequirementTypeResource($requirementType);
    }

    public function update(RequirementTypeRequest $request, RequirementType $requirementType)
    {
        $requirementType->fill($request->all());
        $requirementType->save();
        $requirementType->refresh();
        return new RequirementTypeResource($requirementType);
    }

    public function destroy(RequirementType $requirementType)
    {
        $requirementType->delete();
        return response()->json([], 204);
    }
}
