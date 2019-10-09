<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequirementRequest;
use App\Http\Resources\RequirementResource;
use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function index(Request $request)
    {
        $requirement = Requirement::paginate();
        return RequirementResource::collection($requirement);
    }

    public function store(RequirementRequest $request)
    {
        $requirement = Requirement::create($request->all());
        $requirement->refresh();
        return new RequirementResource($requirement);
    }

    public function show(Requirement $requirement)
    {
        return new RequirementResource($requirement);
    }

    public function update(RequirementRequest $request, Requirement $requirement)
    {
        $requirement->fill($request->all());
        $requirement->save();
        $requirement->refresh();
        return new RequirementResource($requirement);
    }

    public function destroy(Requirement $requirement)
    {
        $requirement->delete();
        return response()->json([], 204);
    }
}
