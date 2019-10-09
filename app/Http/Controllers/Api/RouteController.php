<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RouteRequest;
use App\Http\Resources\RouteResource;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(Request $request)
    {
        $route = Route::paginate();
        return RouteResource::collection($route);
    }

    public function store(RouteRequest $request)
    {
        $route = Route::create($request->all());
        $route->refresh();
        return new RouteResource($route);
    }

    public function show(Route $route)
    {
        return new RouteResource($route);
    }

    public function update(RouteRequest $request, Route $route)
    {
        $route->fill($request->all());
        $route->save();
        $route->refresh();
        return new RouteResource($route);
    }

    public function destroy(Route $route)
    {
        $route->delete();
        return response()->json([], 204);
    }
}
