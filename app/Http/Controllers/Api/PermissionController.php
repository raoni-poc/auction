<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Http\Resources\PermissionResource;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        $permission = Permission::paginate();
        return PermissionResource::collection($permission);
    }

    public function store(PermissionRequest $request)
    {
        $permission = Permission::create($request->all());
        $permission->refresh();
        return new PermissionResource($permission);
    }

    public function show(Permission $permission)
    {
        return new PermissionResource($permission);
    }

    public function update(PermissionRequest $request, Permission $permission)
    {
        $permission->fill($request->all());
        $permission->save();
        $permission->refresh();
        return new PermissionResource($permission);
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return response()->json([], 204);
    }
}
