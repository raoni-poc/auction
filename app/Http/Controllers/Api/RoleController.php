<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RoleRequest;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $address = Role::paginate();
        return RoleResource::collection($address);
    }

    public function store(RoleRequest $request)
    {
        $address = Role::create($request->all());
        $address->refresh();
        return new RoleResource($address);
    }

    public function show(Role $address)
    {
        return new RoleResource($address);
    }

    public function update(RoleRequest $request, Role $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new RoleResource($address);
    }

    public function destroy(Role $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
