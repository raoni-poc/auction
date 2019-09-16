<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RequirementRequest;
use App\Http\Resources\RequirementResource;
use App\Models\Requirement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequirementController extends Controller
{
    public function index(Request $request)
    {
        $address = Requirement::paginate();
        return RequirementResource::collection($address);
    }

    public function store(RequirementRequest $request)
    {
        $address = Requirement::create($request->all());
        $address->refresh();
        return new RequirementResource($address);
    }

    public function show(Requirement $address)
    {
        return new RequirementResource($address);
    }

    public function update(RequirementRequest $request, Requirement $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new RequirementResource($address);
    }

    public function destroy(Requirement $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
