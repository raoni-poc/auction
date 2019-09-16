<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RouteRequest;
use App\Http\Resources\RouteResource;
use App\Models\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function index(Request $request)
    {
        $address = Route::paginate();
        return RouteResource::collection($address);
    }

    public function store(RouteRequest $request)
    {
        $address = Route::create($request->all());
        $address->refresh();
        return new RouteResource($address);
    }

    public function show(Route $address)
    {
        return new RouteResource($address);
    }

    public function update(RouteRequest $request, Route $address)
    {
        $address->fill($request->all());
        $address->save();
        $address->refresh();
        return new RouteResource($address);
    }

    public function destroy(Route $address)
    {
        $address->delete();
        return response()->json([], 204);
    }
}
