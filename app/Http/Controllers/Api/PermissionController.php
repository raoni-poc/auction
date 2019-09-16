<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\PermissionRequest;
use App\Http\Resources\PermissionResource;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        $address = Permission::paginate();
        return PermissionResource::collection($address);
    }

    public function store(PermissionRequest $request)
    {
        $address = Permission::create($request->all());
        $address->refresh();
        return new PermissionResource($address);
    }

    public function show(Permission $address)
    {
        return new PermissionResource($address);
    }

    public function update(PermissionRequest $request, Permission $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new PermissionResource($address);
    }

    public function destroy(Permission $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
